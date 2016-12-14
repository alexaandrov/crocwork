<?php

namespace App\CrocworkBundle\Entity;

/**
 * Organization
 */
class Organization
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $displayName;

    /**
     * @var integer
     */
    private $ogrn;

    /**
     * @var integer
     */
    private $oktmo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set displayName
     *
     * @param string $displayName
     *
     * @return Organization
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * Get displayName
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Set ogrn
     *
     * @param integer $ogrn
     *
     * @return Organization
     */
    public function setOgrn($ogrn)
    {
        $this->ogrn = $ogrn;

        return $this;
    }

    /**
     * Get ogrn
     *
     * @return integer
     */
    public function getOgrn()
    {
        return $this->ogrn;
    }

    /**
     * Set oktmo
     *
     * @param integer $oktmo
     *
     * @return Organization
     */
    public function setOktmo($oktmo)
    {
        $this->oktmo = $oktmo;

        return $this;
    }

    /**
     * Get oktmo
     *
     * @return integer
     */
    public function getOktmo()
    {
        return $this->oktmo;
    }

    /**
     * Add user
     *
     * @param \App\CrocworkBundle\Entity\User $user
     *
     * @return Organization
     */
    public function addUser(\App\CrocworkBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \App\CrocworkBundle\Entity\User $user
     */
    public function removeUser(\App\CrocworkBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}

