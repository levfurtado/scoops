<?php

namespace Proxy\__CG__\Newscoop\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Article extends \Newscoop\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'language', 'publication', 'issue', 'section', 'sectionId', 'issueId', 'creator', 'fields', 'articleAuthors', 'number', 'name', 'shortName', 'updated', 'indexed', 'comments_enabled', 'comments', 'comments_count', 'recommended_comments_count', 'comments_link', 'type', 'published', 'workflowStatus', 'articleOrder', 'public', 'onFrontPage', 'onSection', 'uploaded', 'keywords', 'isIndexed', 'lockUser', 'topics', 'playlists', 'lockTime', 'commentsLocked', 'objectId', 'packages', 'renditions', 'translations', 'webcode', 'reads', 'authors', 'attachments', 'images', 'snippets', 'data');
        }

        return array('__isInitialized__', 'language', 'publication', 'issue', 'section', 'sectionId', 'issueId', 'creator', 'fields', 'articleAuthors', 'number', 'name', 'shortName', 'updated', 'indexed', 'comments_enabled', 'comments', 'comments_count', 'recommended_comments_count', 'comments_link', 'type', 'published', 'workflowStatus', 'articleOrder', 'public', 'onFrontPage', 'onSection', 'uploaded', 'keywords', 'isIndexed', 'lockUser', 'topics', 'playlists', 'lockTime', 'commentsLocked', 'objectId', 'packages', 'renditions', 'translations', 'webcode', 'reads', 'authors', 'attachments', 'images', 'snippets', 'data');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Article $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setId($p_id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($p_id));

        return parent::setId($p_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setPublication(\Newscoop\Entity\Publication $p_publication)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublication', array($p_publication));

        return parent::setPublication($p_publication);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublication()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublication', array());

        return parent::getPublication();
    }

    /**
     * {@inheritDoc}
     */
    public function getPublicationId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublicationId', array());

        return parent::getPublicationId();
    }

    /**
     * {@inheritDoc}
     */
    public function getIssue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIssue', array());

        return parent::getIssue();
    }

    /**
     * {@inheritDoc}
     */
    public function setIssue(\Newscoop\Entity\Issue $issue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIssue', array($issue));

        return parent::setIssue($issue);
    }

    /**
     * {@inheritDoc}
     */
    public function getSection()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSection', array());

        return parent::getSection();
    }

    /**
     * {@inheritDoc}
     */
    public function setSection(\Newscoop\Entity\Section $section)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSection', array($section));

        return parent::setSection($section);
    }

    /**
     * {@inheritDoc}
     */
    public function setWorkflowStatus($workflowStatus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWorkflowStatus', array($workflowStatus));

        return parent::setWorkflowStatus($workflowStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getWorkflowStatus($readable = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorkflowStatus', array($readable));

        return parent::getWorkflowStatus($readable);
    }

    /**
     * {@inheritDoc}
     */
    public function setLanguage(\Newscoop\Entity\Language $p_language)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLanguage', array($p_language));

        return parent::setLanguage($p_language);
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguage', array());

        return parent::getLanguage();
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguageId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguageId', array());

        return parent::getLanguageId();
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguageCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguageCode', array());

        return parent::getLanguageCode();
    }

    /**
     * {@inheritDoc}
     */
    public function getNumber()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getNumber();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumber', array());

        return parent::getNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumber($number)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumber', array($number));

        return parent::setNumber($number);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', array());

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate(\DateTime $date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', array($date));

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function setData(array $data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setData', array($data));

        return parent::setData($data);
    }

    /**
     * {@inheritDoc}
     */
    public function getData($field)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getData', array($field));

        return parent::getData($field);
    }

    /**
     * {@inheritDoc}
     */
    public function setFieldData($field, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFieldData', array($field, $value));

        return parent::setFieldData($field, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldNames()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldNames', array());

        return parent::getFieldNames();
    }

    /**
     * {@inheritDoc}
     */
    public function commentsEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'commentsEnabled', array());

        return parent::commentsEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentsEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentsEnabled', array());

        return parent::getCommentsEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentsEnabled($comments_enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentsEnabled', array($comments_enabled));

        return parent::setCommentsEnabled($comments_enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function commentsLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'commentsLocked', array());

        return parent::commentsLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentsLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentsLocked', array());

        return parent::getCommentsLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentsLocked($commentsLocked)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentsLocked', array($commentsLocked));

        return parent::setCommentsLocked($commentsLocked);
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentsLink($link)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentsLink', array($link));

        return parent::setCommentsLink($link);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', array());

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', array());

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated(\DateTime $updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', array($updated));

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishDate', array());

        return parent::getPublishDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublished', array());

        return parent::getPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublished($published)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublished', array($published));

        return parent::setPublished($published);
    }

    /**
     * {@inheritDoc}
     */
    public function isPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPublished', array());

        return parent::isPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreator(\Newscoop\Entity\User $p_user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', array($p_user));

        return parent::setCreator($p_user);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', array());

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function setWebcode($webcode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWebcode', array($webcode));

        return parent::setWebcode($webcode);
    }

    /**
     * {@inheritDoc}
     */
    public function getWebcode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebcode', array());

        return parent::getWebcode();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebcodeEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebcodeEntity', array());

        return parent::getWebcodeEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function hasWebcode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasWebcode', array());

        return parent::hasWebcode();
    }

    /**
     * {@inheritDoc}
     */
    public function getKeywords()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKeywords', array());

        return parent::getKeywords();
    }

    /**
     * {@inheritDoc}
     */
    public function setKeywords($keywords)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKeywords', array($keywords));

        return parent::setKeywords($keywords);
    }

    /**
     * {@inheritDoc}
     */
    public function setArticleAuthors($articleAuthors)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArticleAuthors', array($articleAuthors));

        return parent::setArticleAuthors($articleAuthors);
    }

    /**
     * {@inheritDoc}
     */
    public function getArticleAuthors()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArticleAuthors', array());

        return parent::getArticleAuthors();
    }

    /**
     * {@inheritDoc}
     */
    public function setPackages($packages)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPackages', array($packages));

        return parent::setPackages($packages);
    }

    /**
     * {@inheritDoc}
     */
    public function getPackages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPackages', array());

        return parent::getPackages();
    }

    /**
     * {@inheritDoc}
     */
    public function setTopics($topics)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTopics', array($topics));

        return parent::setTopics($topics);
    }

    /**
     * {@inheritDoc}
     */
    public function getTopics()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTopics', array());

        return parent::getTopics();
    }

    /**
     * {@inheritDoc}
     */
    public function addTopic(\Newscoop\NewscoopBundle\Entity\Topic $topic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTopic', array($topic));

        return parent::addTopic($topic);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTopic(\Newscoop\NewscoopBundle\Entity\Topic $topic)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTopic', array($topic));

        return parent::removeTopic($topic);
    }

    /**
     * {@inheritDoc}
     */
    public function getTopicNames()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTopicNames', array());

        return parent::getTopicNames();
    }

    /**
     * {@inheritDoc}
     */
    public function setFields($fields)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFields', array($fields));

        return parent::setFields($fields);
    }

    /**
     * {@inheritDoc}
     */
    public function getFields()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFields', array());

        return parent::getFields();
    }

    /**
     * {@inheritDoc}
     */
    public function setTranslations($translations)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTranslations', array($translations));

        return parent::setTranslations($translations);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslations', array());

        return parent::getTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function setRenditions($renditions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRenditions', array($renditions));

        return parent::setRenditions($renditions);
    }

    /**
     * {@inheritDoc}
     */
    public function getRenditions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRenditions', array());

        return parent::getRenditions();
    }

    /**
     * {@inheritDoc}
     */
    public function setReads($reads)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReads', array($reads));

        return parent::setReads($reads);
    }

    /**
     * {@inheritDoc}
     */
    public function getReads()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReads', array());

        return parent::getReads();
    }

    /**
     * {@inheritDoc}
     */
    public function publish()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'publish', array());

        return parent::publish();
    }

    /**
     * {@inheritDoc}
     */
    public function getIndexed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIndexed', array());

        return parent::getIndexed();
    }

    /**
     * {@inheritDoc}
     */
    public function setIndexed(\DateTime $indexed = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIndexed', array($indexed));

        return parent::setIndexed($indexed);
    }

    /**
     * {@inheritDoc}
     */
    public function author($title, array $fields)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'author', array($title, $fields));

        return parent::author($title, $fields);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttachments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttachments', array());

        return parent::getAttachments();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttachments($attachments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttachments', array($attachments));

        return parent::setAttachments($attachments);
    }

    /**
     * {@inheritDoc}
     */
    public function addAttachment(\Newscoop\Entity\Attachment $attachment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAttachment', array($attachment));

        return parent::addAttachment($attachment);
    }

    /**
     * {@inheritDoc}
     */
    public function getImages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImages', array());

        return parent::getImages();
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstImage', array());

        return parent::getFirstImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImages(\Doctrine\Common\Collections\ArrayCollection $images)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImages', array($images));

        return parent::setImages($images);
    }

    /**
     * {@inheritDoc}
     */
    public function getView()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getView', array());

        return parent::getView();
    }

    /**
     * {@inheritDoc}
     */
    public function getObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObject', array());

        return parent::getObject();
    }

    /**
     * {@inheritDoc}
     */
    public function getSnippets()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSnippets', array());

        return parent::getSnippets();
    }

    /**
     * {@inheritDoc}
     */
    public function addSnippet(\Newscoop\Entity\Snippet $snippet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSnippet', array($snippet));

        return parent::addSnippet($snippet);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSnippet(\Newscoop\Entity\Snippet $snippet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSnippet', array($snippet));

        return parent::removeSnippet($snippet);
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguageObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguageObject', array());

        return parent::getLanguageObject();
    }

    /**
     * {@inheritDoc}
     */
    public function isLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isLocked', array());

        return parent::isLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function getLockUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLockUser', array());

        return parent::getLockUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setLockUser(\Newscoop\Entity\User $lockUser = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLockUser', array($lockUser));

        return parent::setLockUser($lockUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getLockTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLockTime', array());

        return parent::getLockTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setLockTime(\DateTime $lockTime = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLockTime', array($lockTime));

        return parent::setLockTime($lockTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getLockTimeDiffrence()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLockTimeDiffrence', array());

        return parent::getLockTimeDiffrence();
    }

    /**
     * {@inheritDoc}
     */
    public function getArticleOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArticleOrder', array());

        return parent::getArticleOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setArticleOrder($articleOrder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArticleOrder', array($articleOrder));

        return parent::setArticleOrder($articleOrder);
    }

    /**
     * {@inheritDoc}
     */
    public function getShortName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShortName', array());

        return parent::getShortName();
    }

    /**
     * {@inheritDoc}
     */
    public function setShortName($shortName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShortName', array($shortName));

        return parent::setShortName($shortName);
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', array($type));

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublic', array());

        return parent::getPublic();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublic($public)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublic', array($public));

        return parent::setPublic($public);
    }

    /**
     * {@inheritDoc}
     */
    public function getOnFrontPage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOnFrontPage', array());

        return parent::getOnFrontPage();
    }

    /**
     * {@inheritDoc}
     */
    public function setOnFrontPage($onFrontPage = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOnFrontPage', array($onFrontPage));

        return parent::setOnFrontPage($onFrontPage);
    }

    /**
     * {@inheritDoc}
     */
    public function getOnSection()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOnSection', array());

        return parent::getOnSection();
    }

    /**
     * {@inheritDoc}
     */
    public function setOnSection($onSection = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOnSection', array($onSection));

        return parent::setOnSection($onSection);
    }

    /**
     * {@inheritDoc}
     */
    public function getUploaded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUploaded', array());

        return parent::getUploaded();
    }

    /**
     * {@inheritDoc}
     */
    public function setUploaded(\DateTime $uploaded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUploaded', array($uploaded));

        return parent::setUploaded($uploaded);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsIndexed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsIndexed', array());

        return parent::getIsIndexed();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsIndexed($isIndexed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsIndexed', array($isIndexed));

        return parent::setIsIndexed($isIndexed);
    }

    /**
     * {@inheritDoc}
     */
    public function getIssueId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIssueId', array());

        return parent::getIssueId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIssueId($issueId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIssueId', array($issueId));

        return parent::setIssueId($issueId);
    }

    /**
     * {@inheritDoc}
     */
    public function getSectionId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSectionId', array());

        return parent::getSectionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSectionId($sectionId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSectionId', array($sectionId));

        return parent::setSectionId($sectionId);
    }

}