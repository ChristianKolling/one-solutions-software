<?php

namespace DoctrineORMModule\Proxy\__CG__\Zf2User\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \Zf2User\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'id', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'email', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'username', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'password', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'passwordClue', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'salt', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'activationKey', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'status', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'created', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'lastLogin', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'role', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'perfil');
        }

        return array('__isInitialized__', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'id', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'email', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'username', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'password', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'passwordClue', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'salt', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'activationKey', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'status', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'created', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'lastLogin', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'role', '' . "\0" . 'Zf2User\\Entity\\User' . "\0" . 'perfil');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', array($username));

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', array());

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($password));

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function encryptPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'encryptPassword', array($password));

        return parent::encryptPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswordClue($passwordClue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswordClue', array($passwordClue));

        return parent::setPasswordClue($passwordClue);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswordClue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswordClue', array());

        return parent::getPasswordClue();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalt($salt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalt', array($salt));

        return parent::setSalt($salt);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', array());

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivationKey($activationKey)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivationKey', array($activationKey));

        return parent::setActivationKey($activationKey);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivationKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivationKey', array());

        return parent::getActivationKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', array($status));

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', array());

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', array());

        return parent::setCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', array());

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastLogin', array());

        return parent::setLastLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastLogin', array());

        return parent::getLastLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function setRole(\Zf2Acl\Entity\Role $role = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', array($role));

        return parent::setRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', array());

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function getPerfil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPerfil', array());

        return parent::getPerfil();
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', array());

        return parent::toArray();
    }

}
