<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Settings extends \AppBundle\Entity\Settings implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'appname', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'subtitle', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'sitedescription', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'sitekeywords', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'login', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'currency', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'cashaccount', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'paypalclientid', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'paypalclientsecret', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'paypalaccount', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'stripeapikey', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'manual', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'stripe', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'paypal', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'gpay', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'stripepublickey', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'paypalsandbox', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'appdescription', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'googleplay', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'privacypolicy', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'refundpolicy', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'faq', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'firebasekey', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'rewardedadmobid', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'banneradmobid', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'bannerfacebookid', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'bannertype', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'nativeadmobid', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'nativefacebookid', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'nativeitem', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'nativetype', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'interstitialadmobid', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'interstitialfacebookid', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'interstitialtype', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'interstitialclick', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'homebanner', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'homebannertype', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'moviebanner', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'moviebannertype', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'seriebanner', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'seriebannertype', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'channelbanner', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'channelbannertype', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'themoviedbkey', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'themoviedblang', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'header', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'file', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'favfile', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'media', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'logo', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'favicon'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'appname', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'title', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'subtitle', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'sitedescription', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'sitekeywords', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'login', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'currency', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'cashaccount', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'paypalclientid', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'paypalclientsecret', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'paypalaccount', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'stripeapikey', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'manual', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'stripe', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'paypal', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'gpay', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'stripepublickey', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'paypalsandbox', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'appdescription', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'googleplay', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'privacypolicy', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'refundpolicy', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'faq', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'firebasekey', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'rewardedadmobid', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'banneradmobid', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'bannerfacebookid', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'bannertype', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'nativeadmobid', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'nativefacebookid', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'nativeitem', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'nativetype', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'interstitialadmobid', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'interstitialfacebookid', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'interstitialtype', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'interstitialclick', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'homebanner', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'homebannertype', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'moviebanner', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'moviebannertype', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'seriebanner', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'seriebannertype', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'channelbanner', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'channelbannertype', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'themoviedbkey', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'themoviedblang', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'header', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'file', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'favfile', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'media', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'logo', '' . "\0" . 'AppBundle\\Entity\\Settings' . "\0" . 'favicon'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Settings $proxy) {
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
    public function setAppname($appname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAppname', [$appname]);

        return parent::setAppname($appname);
    }

    /**
     * {@inheritDoc}
     */
    public function getAppname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAppname', []);

        return parent::getAppname();
    }

    /**
     * {@inheritDoc}
     */
    public function setAppdescription($appdescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAppdescription', [$appdescription]);

        return parent::setAppdescription($appdescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getAppdescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAppdescription', []);

        return parent::getAppdescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setGoogleplay($googleplay)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGoogleplay', [$googleplay]);

        return parent::setGoogleplay($googleplay);
    }

    /**
     * {@inheritDoc}
     */
    public function getGoogleplay()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGoogleplay', []);

        return parent::getGoogleplay();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrivacypolicy($privacypolicy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrivacypolicy', [$privacypolicy]);

        return parent::setPrivacypolicy($privacypolicy);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrivacypolicy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrivacypolicy', []);

        return parent::getPrivacypolicy();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirebasekey($firebasekey)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirebasekey', [$firebasekey]);

        return parent::setFirebasekey($firebasekey);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirebasekey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirebasekey', []);

        return parent::getFirebasekey();
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
    public function getBanneradmobid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBanneradmobid', []);

        return parent::getBanneradmobid();
    }

    /**
     * {@inheritDoc}
     */
    public function setBanneradmobid($banneradmobid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBanneradmobid', [$banneradmobid]);

        return parent::setBanneradmobid($banneradmobid);
    }

    /**
     * {@inheritDoc}
     */
    public function getBannerfacebookid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBannerfacebookid', []);

        return parent::getBannerfacebookid();
    }

    /**
     * {@inheritDoc}
     */
    public function setBannerfacebookid($bannerfacebookid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBannerfacebookid', [$bannerfacebookid]);

        return parent::setBannerfacebookid($bannerfacebookid);
    }

    /**
     * {@inheritDoc}
     */
    public function getNativefacebookid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNativefacebookid', []);

        return parent::getNativefacebookid();
    }

    /**
     * {@inheritDoc}
     */
    public function setNativefacebookid($nativefacebookid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNativefacebookid', [$nativefacebookid]);

        return parent::setNativefacebookid($nativefacebookid);
    }

    /**
     * {@inheritDoc}
     */
    public function getNativeadmobid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNativeadmobid', []);

        return parent::getNativeadmobid();
    }

    /**
     * {@inheritDoc}
     */
    public function setNativeadmobid($nativeadmobid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNativeadmobid', [$nativeadmobid]);

        return parent::setNativeadmobid($nativeadmobid);
    }

    /**
     * {@inheritDoc}
     */
    public function getInterstitialfacebookid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInterstitialfacebookid', []);

        return parent::getInterstitialfacebookid();
    }

    /**
     * {@inheritDoc}
     */
    public function setInterstitialfacebookid($interstitialfacebookid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInterstitialfacebookid', [$interstitialfacebookid]);

        return parent::setInterstitialfacebookid($interstitialfacebookid);
    }

    /**
     * {@inheritDoc}
     */
    public function getInterstitialadmobid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInterstitialadmobid', []);

        return parent::getInterstitialadmobid();
    }

    /**
     * {@inheritDoc}
     */
    public function setInterstitialadmobid($interstitialadmobid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInterstitialadmobid', [$interstitialadmobid]);

        return parent::setInterstitialadmobid($interstitialadmobid);
    }

    /**
     * {@inheritDoc}
     */
    public function getBannertype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBannertype', []);

        return parent::getBannertype();
    }

    /**
     * {@inheritDoc}
     */
    public function setBannertype($bannertype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBannertype', [$bannertype]);

        return parent::setBannertype($bannertype);
    }

    /**
     * {@inheritDoc}
     */
    public function getInterstitialtype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInterstitialtype', []);

        return parent::getInterstitialtype();
    }

    /**
     * {@inheritDoc}
     */
    public function setInterstitialtype($interstitialtype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInterstitialtype', [$interstitialtype]);

        return parent::setInterstitialtype($interstitialtype);
    }

    /**
     * {@inheritDoc}
     */
    public function getNativetype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNativetype', []);

        return parent::getNativetype();
    }

    /**
     * {@inheritDoc}
     */
    public function setNativetype($nativetype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNativetype', [$nativetype]);

        return parent::setNativetype($nativetype);
    }

    /**
     * {@inheritDoc}
     */
    public function getInterstitialclick()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInterstitialclick', []);

        return parent::getInterstitialclick();
    }

    /**
     * {@inheritDoc}
     */
    public function setInterstitialclick($interstitialclick)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInterstitialclick', [$interstitialclick]);

        return parent::setInterstitialclick($interstitialclick);
    }

    /**
     * {@inheritDoc}
     */
    public function getNativeitem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNativeitem', []);

        return parent::getNativeitem();
    }

    /**
     * {@inheritDoc}
     */
    public function setNativeitem($nativeitem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNativeitem', [$nativeitem]);

        return parent::setNativeitem($nativeitem);
    }

    /**
     * {@inheritDoc}
     */
    public function getRewardedadmobid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRewardedadmobid', []);

        return parent::getRewardedadmobid();
    }

    /**
     * {@inheritDoc}
     */
    public function setRewardedadmobid($rewardedadmobid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRewardedadmobid', [$rewardedadmobid]);

        return parent::setRewardedadmobid($rewardedadmobid);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaypalaccount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaypalaccount', []);

        return parent::getPaypalaccount();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaypalaccount($paypalaccount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaypalaccount', [$paypalaccount]);

        return parent::setPaypalaccount($paypalaccount);
    }

    /**
     * {@inheritDoc}
     */
    public function getStripeapikey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStripeapikey', []);

        return parent::getStripeapikey();
    }

    /**
     * {@inheritDoc}
     */
    public function setStripeapikey($stripeapikey)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStripeapikey', [$stripeapikey]);

        return parent::setStripeapikey($stripeapikey);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaypalsandbox()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaypalsandbox', []);

        return parent::getPaypalsandbox();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaypalsandbox($paypalsandbox)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaypalsandbox', [$paypalsandbox]);

        return parent::setPaypalsandbox($paypalsandbox);
    }

    /**
     * {@inheritDoc}
     */
    public function getStripepublickey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStripepublickey', []);

        return parent::getStripepublickey();
    }

    /**
     * {@inheritDoc}
     */
    public function setStripepublickey($stripepublickey)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStripepublickey', [$stripepublickey]);

        return parent::setStripepublickey($stripepublickey);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrency()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrency', []);

        return parent::getCurrency();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrency($currency)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrency', [$currency]);

        return parent::setCurrency($currency);
    }

    /**
     * {@inheritDoc}
     */
    public function getCashaccount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCashaccount', []);

        return parent::getCashaccount();
    }

    /**
     * {@inheritDoc}
     */
    public function setCashaccount($cashaccount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCashaccount', [$cashaccount]);

        return parent::setCashaccount($cashaccount);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaypal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaypal', []);

        return parent::getPaypal();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaypal($paypal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaypal', [$paypal]);

        return parent::setPaypal($paypal);
    }

    /**
     * {@inheritDoc}
     */
    public function getStripe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStripe', []);

        return parent::getStripe();
    }

    /**
     * {@inheritDoc}
     */
    public function setStripe($stripe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStripe', [$stripe]);

        return parent::setStripe($stripe);
    }

    /**
     * {@inheritDoc}
     */
    public function getManual()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getManual', []);

        return parent::getManual();
    }

    /**
     * {@inheritDoc}
     */
    public function setManual($manual)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setManual', [$manual]);

        return parent::setManual($manual);
    }

    /**
     * {@inheritDoc}
     */
    public function getRefundpolicy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRefundpolicy', []);

        return parent::getRefundpolicy();
    }

    /**
     * {@inheritDoc}
     */
    public function setRefundpolicy($refundpolicy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRefundpolicy', [$refundpolicy]);

        return parent::setRefundpolicy($refundpolicy);
    }

    /**
     * {@inheritDoc}
     */
    public function getFaq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFaq', []);

        return parent::getFaq();
    }

    /**
     * {@inheritDoc}
     */
    public function setFaq($faq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFaq', [$faq]);

        return parent::setFaq($faq);
    }

    /**
     * {@inheritDoc}
     */
    public function getFavicon()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFavicon', []);

        return parent::getFavicon();
    }

    /**
     * {@inheritDoc}
     */
    public function setFavicon($favicon)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFavicon', [$favicon]);

        return parent::setFavicon($favicon);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogo', []);

        return parent::getLogo();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogo($logo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogo', [$logo]);

        return parent::setLogo($logo);
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
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubtitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubtitle', []);

        return parent::getSubtitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubtitle($subtitle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubtitle', [$subtitle]);

        return parent::setSubtitle($subtitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getSitekeywords()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSitekeywords', []);

        return parent::getSitekeywords();
    }

    /**
     * {@inheritDoc}
     */
    public function setSitekeywords($sitekeywords)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSitekeywords', [$sitekeywords]);

        return parent::setSitekeywords($sitekeywords);
    }

    /**
     * {@inheritDoc}
     */
    public function getSitedescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSitedescription', []);

        return parent::getSitedescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setSitedescription($sitedescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSitedescription', [$sitedescription]);

        return parent::setSitedescription($sitedescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getFavfile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFavfile', []);

        return parent::getFavfile();
    }

    /**
     * {@inheritDoc}
     */
    public function setFavfile($favfile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFavfile', [$favfile]);

        return parent::setFavfile($favfile);
    }

    /**
     * {@inheritDoc}
     */
    public function getThemoviedbkey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThemoviedbkey', []);

        return parent::getThemoviedbkey();
    }

    /**
     * {@inheritDoc}
     */
    public function setThemoviedbkey($themoviedbkey)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThemoviedbkey', [$themoviedbkey]);

        return parent::setThemoviedbkey($themoviedbkey);
    }

    /**
     * {@inheritDoc}
     */
    public function getThemoviedblang()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThemoviedblang', []);

        return parent::getThemoviedblang();
    }

    /**
     * {@inheritDoc}
     */
    public function setThemoviedblang($themoviedblang)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThemoviedblang', [$themoviedblang]);

        return parent::setThemoviedblang($themoviedblang);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeader()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeader', []);

        return parent::getHeader();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeader($header)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeader', [$header]);

        return parent::setHeader($header);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaypalclientsecret()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaypalclientsecret', []);

        return parent::getPaypalclientsecret();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaypalclientsecret($paypalclientsecret)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaypalclientsecret', [$paypalclientsecret]);

        return parent::setPaypalclientsecret($paypalclientsecret);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaypalclientid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaypalclientid', []);

        return parent::getPaypalclientid();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaypalclientid($paypalclientid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaypalclientid', [$paypalclientid]);

        return parent::setPaypalclientid($paypalclientid);
    }

    /**
     * {@inheritDoc}
     */
    public function getGpay()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGpay', []);

        return parent::getGpay();
    }

    /**
     * {@inheritDoc}
     */
    public function setGpay($gpay)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGpay', [$gpay]);

        return parent::setGpay($gpay);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogin', []);

        return parent::getLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogin($login)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogin', [$login]);

        return parent::setLogin($login);
    }

    /**
     * {@inheritDoc}
     */
    public function getHomebannertype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHomebannertype', []);

        return parent::getHomebannertype();
    }

    /**
     * {@inheritDoc}
     */
    public function setHomebannertype($homebannertype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHomebannertype', [$homebannertype]);

        return parent::setHomebannertype($homebannertype);
    }

    /**
     * {@inheritDoc}
     */
    public function getHomebanner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHomebanner', []);

        return parent::getHomebanner();
    }

    /**
     * {@inheritDoc}
     */
    public function setHomebanner($homebanner)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHomebanner', [$homebanner]);

        return parent::setHomebanner($homebanner);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoviebanner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoviebanner', []);

        return parent::getMoviebanner();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoviebanner($moviebanner)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoviebanner', [$moviebanner]);

        return parent::setMoviebanner($moviebanner);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoviebannertype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoviebannertype', []);

        return parent::getMoviebannertype();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoviebannertype($moviebannertype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoviebannertype', [$moviebannertype]);

        return parent::setMoviebannertype($moviebannertype);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeriebanner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeriebanner', []);

        return parent::getSeriebanner();
    }

    /**
     * {@inheritDoc}
     */
    public function setSeriebanner($seriebanner)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSeriebanner', [$seriebanner]);

        return parent::setSeriebanner($seriebanner);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeriebannertype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeriebannertype', []);

        return parent::getSeriebannertype();
    }

    /**
     * {@inheritDoc}
     */
    public function setSeriebannertype($seriebannertype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSeriebannertype', [$seriebannertype]);

        return parent::setSeriebannertype($seriebannertype);
    }

    /**
     * {@inheritDoc}
     */
    public function getChannelbanner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannelbanner', []);

        return parent::getChannelbanner();
    }

    /**
     * {@inheritDoc}
     */
    public function setChannelbanner($channelbanner)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannelbanner', [$channelbanner]);

        return parent::setChannelbanner($channelbanner);
    }

    /**
     * {@inheritDoc}
     */
    public function getChannelbannertype()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannelbannertype', []);

        return parent::getChannelbannertype();
    }

    /**
     * {@inheritDoc}
     */
    public function setChannelbannertype($channelbannertype)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannelbannertype', [$channelbannertype]);

        return parent::setChannelbannertype($channelbannertype);
    }

}
