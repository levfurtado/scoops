<?php

namespace Proxy\__CG__\Newscoop\Image;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Rendition extends \Newscoop\Image\Rendition implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'name', 'width', 'height', 'specs', 'coords', 'offset', 'label');
        }

        return array('__isInitialized__', 'name', 'width', 'height', 'specs', 'coords', 'offset', 'label');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Rendition $proxy) {
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setWidth($width)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWidth', array($width));

        return parent::setWidth($width);
    }

    /**
     * {@inheritDoc}
     */
    public function getWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWidth', array());

        return parent::getWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeight($height)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeight', array($height));

        return parent::setHeight($height);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeight', array());

        return parent::getHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setSpecs($specs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpecs', array($specs));

        return parent::setSpecs($specs);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpecs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpecs', array());

        return parent::getSpecs();
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getName();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
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
    public function getPreview($width, $height)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreview', array($width, $height));

        return parent::getPreview($width, $height);
    }

    /**
     * {@inheritDoc}
     */
    public function getThumbnail(\Newscoop\Image\ImageInterface $image, \Newscoop\Image\ImageService $imageService)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThumbnail', array($image, $imageService));

        return parent::getThumbnail($image, $imageService);
    }

    /**
     * {@inheritDoc}
     */
    public function generateImage($imagePath)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'generateImage', array($imagePath));

        return parent::generateImage($imagePath);
    }

    /**
     * {@inheritDoc}
     */
    public function getAspectRatio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAspectRatio', array());

        return parent::getAspectRatio();
    }

    /**
     * {@inheritDoc}
     */
    public function getSelectArea(\Newscoop\Image\ImageInterface $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSelectArea', array($image));

        return parent::getSelectArea($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getMinSize(\Newscoop\Image\ImageInterface $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMinSize', array($image));

        return parent::getMinSize($image);
    }

    /**
     * {@inheritDoc}
     */
    public function isCrop()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCrop', array());

        return parent::isCrop();
    }

    /**
     * {@inheritDoc}
     */
    public function fits(\Newscoop\Image\ImageInterface $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'fits', array($image));

        return parent::fits($image);
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
    public function setLabel($label)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabel', array($label));

        return parent::setLabel($label);
    }

    /**
     * {@inheritDoc}
     */
    public function getLabel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabel', array());

        return parent::getLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function getInfo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInfo', array());

        return parent::getInfo();
    }

}