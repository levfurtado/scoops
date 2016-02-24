<?php

$newscoopDir = realpath(dirname(__FILE__).'/../../../../../../').'/';

require_once $newscoopDir.'vendor/autoload.php';
require $newscoopDir.'conf/database_conf.php';

use Monolog\Logger;

$upgradeErrors = array();
$app = new Silex\Application();
$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => $newscoopDir.'log/upgrade.log',
    'monolog.level' => Logger::NOTICE,
    'monolog.name' => 'upgrade',
));

$logger = $app['monolog'];

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'    => 'pdo_mysql',
        'host'      => $Campsite['db']['host'],
        'dbname'    => $Campsite['db']['name'],
        'user'      => $Campsite['db']['user'],
        'password'  => $Campsite['db']['pass'],
        'port'      => $Campsite['db']['port'],
        'charset'   => 'utf8',
    ),
));

try {
    $app['db']->query('ALTER TABLE playlist ADD themes VARCHAR(255) DEFAULT NULL');
} catch (\Exception $e) {
}
