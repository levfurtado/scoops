<?php

$newscoopDir = realpath(dirname(__FILE__).'/../../../../../../').'/';
$upgradeErrors = array();

require $newscoopDir.'conf/database_conf.php';
$loader = require $newscoopDir.'/vendor/autoload.php';
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

use Monolog\Logger;
use Newscoop\NewscoopBundle\Entity\Topic;
use Newscoop\NewscoopBundle\Entity\TopicTranslation;
use Dflydev\Silex\Provider\DoctrineOrm\DoctrineOrmServiceProvider;
use Newscoop\Exception\ResourcesConflictException;
use Doctrine\ORM\EntityNotFoundException;

$app = new Silex\Application();
$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => $newscoopDir.'log/upgrade.log',
    'monolog.level' => Logger::NOTICE,
    'monolog.name' => 'upgrade',
));

$logger = $app['monolog'];
$app['debug'] = true;
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver' => 'pdo_mysql',
        'host' => $Campsite['db']['host'],
        'dbname' => $Campsite['db']['name'],
        'user' => $Campsite['db']['user'],
        'password' => $Campsite['db']['pass'],
        'port' => $Campsite['db']['port'],
        'charset' => 'utf8',
        ),
    ));

$app->register(new DoctrineOrmServiceProvider(), array(
    'orm.proxies_dir' => $newscoopDir.'/library/Proxy',
    'orm.auto_generate_proxies' => true,
    'orm.proxies_namespace' => 'Proxy',
    'orm.em.options' => array(
        'mappings' => array(
            array(
                'type' => 'annotation',
                'namespace' => "Newscoop\Entity",
                'path' => $newscoopDir.'library/Newscoop/Entity',
                'use_simple_annotation_reader' => false,
                ),
            array(
                'type' => 'annotation',
                'namespace' => "Newscoop\NewscoopBundle\Entity",
                'path' => $newscoopDir.'src/Newscoop/NewscoopBundle/Entity',
                'use_simple_annotation_reader' => false,
                ),
            ),
        ),
    ));

$app['topics_service'] = $app->share(function () use ($app) {
    return new Newscoop\NewscoopBundle\Services\TopicService($app['orm.em'], $app['dispatcher']);
});

try {
    // add TreeListener and TranslatableListener to EventManager,
    // so the left, right, level and translations can be saved properly
    $treeListener = new \Gedmo\Tree\TreeListener();
    $translatableListener = new \Gedmo\Translatable\TranslatableListener();
    $app['orm.em']->getEventManager()->addEventSubscriber($treeListener);
    $app['orm.em']->getEventManager()->addEventSubscriber($translatableListener);

    try {
        $tablesCount = 'SELECT COUNT(*) AS count FROM Topics';
        $app['db']->fetchAll($tablesCount);
    } catch (\Exception $e) {
        return;
    }

    $sqlTopics = 'SELECT node.id, (COUNT( parent.id) -1) AS depth
    FROM Topics AS node, Topics AS parent
    WHERE node.node_left
    BETWEEN parent.node_left
    AND parent.node_right
    GROUP BY node.id
    ORDER BY node.node_left';

    $rows = $app['db']->fetchAll($sqlTopics);

    $tree = array();
    $startDepth = 0;
    $currentPath = array();
    foreach ($rows as $row) {
        $topicId = $row['id'];
        $depth = $row['depth'] - (int) $startDepth;
        if (is_null($startDepth)) {
            $startDepth = $depth;
            $depth = 0;
            $currentPath[] = $topicId;
        } elseif ($depth > count($currentPath)) {
            $currentPath[] = $topicId;
        } elseif ($depth == 0) {
            $currentPath = array($topicId);
        } else {
            while ($depth < count($currentPath)) {
                array_pop($currentPath);
            }
            $currentPath[] = $topicId;
        }

        $tree[] = $currentPath;
    }

    $topicSql = 'SELECT `fk_topic_id` as id, `fk_language_id` as languageId, `name` FROM `TopicNames` WHERE `fk_topic_id` = ?';

    foreach ($tree as $key => $row) {
        // if root
        if (count($row) === 1) {
            $topicDetails = array();
            $topicDetails = $app['db']->fetchAll($topicSql, array($row[0]));
            // if the tree is broken and have some left, right nodes only without names, skip it
            if (empty($topicDetails)) {
                continue;
            }

            try {
                //create root Topic object
                $topic = new Topic();
                $topic->setId($topicDetails[0]['id']);
                $topic->setTitle($topicDetails[0]['name']);
                $language = $app['orm.em']->getReference("Newscoop\Entity\Language", $topicDetails[0]['languageId']);
                $locale = $language->getCode();

                $app['topics_service']->saveNewTopic($topic, $locale, true);
                // loop for each translations and add not added translations
                // if topic has more translations
                if (count($topicDetails) > 1) {
                    unset($topicDetails[0]);
                    foreach ($topicDetails as $key => $translation) {
                        $locale = $app['orm.em']->getReference("Newscoop\Entity\Language", $translation['languageId'])->getCode();
                        $topicTranslation = new TopicTranslation($locale, 'title', $translation['name']);
                        $topic->addTranslation($topicTranslation);
                    }

                    $app['orm.em']->flush();
                }

                continue;
            } catch (ResourcesConflictException $e) {
                //topic already exists or language can not be found
                continue;
            } catch (EntityNotFoundException $e) {
                //Language can not be found
                continue;
            }
        }

            // if child
        if (count($row) > 1) {
            try {
                $topicToInsert = end($row);
                $topicToInsertDetails = $app['db']->fetchAll($topicSql, array($topicToInsert));
                $parentTopic = prev($row);

                $parentTopicDetails = $app['db']->fetchAll($topicSql, array($parentTopic));

                if (empty($parentTopicDetails) || empty($topicToInsertDetails)) {
                    continue;
                }

                $params = array(
                    'parent' => $parentTopic,
                    'last' => true,
                );

                try {
                    $locale = $app['orm.em']->getReference("Newscoop\Entity\Language", $topicToInsertDetails[0]['languageId'])->getCode();
                    $topic = new Topic();
                    $topic->setId($topicToInsertDetails[0]['id']);
                    $topic->setTitle($topicToInsertDetails[0]['name']);
                    $topic->setTranslatableLocale($locale);

                    $app['topics_service']->saveTopicPosition($topic, $params);
                } catch (\Exception $e) {
                    //topic already exists or language can not be found
                    continue;
                }

                if (count($topicToInsertDetails) > 1) {
                    unset($topicToInsertDetails[0]);
                    foreach ($topicToInsertDetails as $key => $translation) {
                        $locale = $app['orm.em']->getReference("Newscoop\Entity\Language", $translation['languageId'])->getCode();
                        $topicTranslation = new TopicTranslation($locale, 'title', $translation['name']);
                        $topic->addTranslation($topicTranslation);
                    }

                    $app['orm.em']->flush();
                }
            } catch (EntityNotFoundException $e) {
                //Language can not be found
                continue;
            }
        }
    }
} catch (\Exception $e) {
    $msg = $e->getMessage();
    $logger->addError($msg);
    $upgradeErrors[] = $msg;
}

if (count($upgradeErrors) > 0) {
    $msg = "Script which converts topics to a new format, failed. \n"
    ."You can execute this script manually via CLI with root permissions, e.g.: \n"
    ."sudo php ${newscoopDir}install/Resources/sql/upgrade/4.4.x/2015.03.11/topics.php \n"
    ."You could also check 'log/upgrade.log' file for more details.";
    $logger->addError($msg);
    array_splice($upgradeErrors, 0, 0, array($msg));

    return;
}

try {
    $connection = $app['orm.em']->getConnection();
    $stmt = $connection->prepare('DROP TABLE Topics; DROP TABLE TopicNames;');
    $stmt->execute();
} catch (\Exception $e) {
    $msg = "Script could not drop old topics tables. \n"
    ."You can execute SQL command manually in your database: \n"
    .'DROP TABLE Topics; DROP TABLE TopicNames;';
    $logger->addError($msg);
}
