<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Slide extends \AppBundle\Entity\Slide implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'url', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'type', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'poster', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'channel', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'genre', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'category', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'media', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'position', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'file'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'url', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'type', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'poster', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'channel', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'genre', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'category', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'media', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'position', '' . "\0" . 'AppBundle\\Entity\\Slide' . "\0" . 'file'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Slide $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrl', [$url]);

        return parent::setUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrl', []);

        return parent::getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function getPoster()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPoster', []);

        return parent::getPoster();
    }

    /**
     * {@inheritDoc}
     */
    public function setPoster($poster)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPoster', [$poster]);

        return parent::setPoster($poster);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory($category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function setMedia(\MediaBundle\Entity\Media $media)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMedia', [$media]);

        return parent::setMedia($media);
    }

    /**
     * {@inheritDoc}
     */
    public function getMedia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMedia', []);

        return parent::getMedia();
    }

    /**
     * {@inheritDoc}
     */
    public function getClear()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClear', []);

        return parent::getClear();
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', []);

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile($file)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', [$file]);

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', []);

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getChannel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannel', []);

        return parent::getChannel();
    }

    /**
     * {@inheritDoc}
     */
    public function setChannel($channel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannel', [$channel]);

        return parent::setChannel($channel);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenre', []);

        return parent::getGenre();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenre($genre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenre', [$genre]);

        return parent::setGenre($genre);
    }

}