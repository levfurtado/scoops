<?php

namespace Proxy\__CG__\Newscoop\Package;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Item extends \Newscoop\Package\Item implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array('image' => NULL);



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        unset($this->image);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', array($name));

            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);
    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', array($name, $value));

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', array($name));

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'package', 'image', 'offset', 'caption', 'coords', 'videoUrl', 'type', 'link');
        }

        return array('__isInitialized__', 'id', 'package', 'offset', 'caption', 'coords', 'videoUrl', 'type', 'link');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Item $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->image);
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', array());

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setOffset($offset)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOffset', array($offset));

        return parent::setOffset($offset);
    }

    /**
     * {@inheritDoc}
     */
    public function getOffset()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOffset', array());

        return parent::getOffset();
    }

    /**
     * {@inheritDoc}
     */
    public function getRendition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRendition', array());

        return parent::getRendition();
    }

    /**
     * {@inheritDoc}
     */
    public function setCaption($caption)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCaption', array($caption));

        return parent::setCaption($caption);
    }

    /**
     * {@inheritDoc}
     */
    public function getCaption()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCaption', array());

        return parent::getCaption();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoords($coords)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoords', array($coords));

        return parent::setCoords($coords);
    }

    /**
     * {@inheritDoc}
     */
    public function isVideo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isVideo', array());

        return parent::isVideo();
    }

    /**
     * {@inheritDoc}
     */
    public function isImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isImage', array());

        return parent::isImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setVideoUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVideoUrl', array($url));

        return parent::setVideoUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getVideoUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVideoUrl', array());

        return parent::getVideoUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getPackageItems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPackageItems', array());

        return parent::getPackageItems();
    }

    /**
     * {@inheritDoc}
     */
    public function getImageSpecs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageSpecs', array());

        return parent::getImageSpecs();
    }

    /**
     * {@inheritDoc}
     */
    public function getPackageId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPackageId', array());

        return parent::getPackageId();
    }

    /**
     * {@inheritDoc}
     */
    public function getPackage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPackage', array());

        return parent::getPackage();
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
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', array());

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setLink($link)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLink', array($link));

        return parent::setLink($link);
    }

    /**
     * {@inheritDoc}
     */
    public function getLink()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLink', array());

        return parent::getLink();
    }

    /**
     * {@inheritDoc}
     */
    public function getItem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItem', array());

        return parent::getItem();
    }

}
