<?php

namespace App\CrocworkBundle\Entity;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $middlename;

    /**
     * @var \DateTime
     */
    private $birthday;

    /**
     * @var integer
     */
    private $inn;

    /**
     * @var integer
     */
    private $snils;

    /**
     * @var \App\CrocworkBundle\Entity\Organization
     */
    private $organization;


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
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set middlename
     *
     * @param string $middlename
     *
     * @return User
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;

        return $this;
    }

    /**
     * Get middlename
     *
     * @return string
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set inn
     *
     * @param integer $inn
     *
     * @return User
     */
    public function setInn($inn)
    {
        $this->inn = $inn;

        return $this;
    }

    /**
     * Get inn
     *
     * @return integer
     */
    public function getInn()
    {
        return $this->inn;
    }

    /**
     * Set snils
     *
     * @param integer $snils
     *
     * @return User
     */
    public function setSnils($snils)
    {
        $this->snils = $snils;

        return $this;
    }

    /**
     * Get snils
     *
     * @return integer
     */
    public function getSnils()
    {
        return $this->snils;
    }

    /**
     * Set organization
     *
     * @param \App\CrocworkBundle\Entity\Organization $organization
     *
     * @return User
     */
    public function setOrganization(\App\CrocworkBundle\Entity\Organization $organization = null)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get organization
     *
     * @return \App\CrocworkBundle\Entity\Organization
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * For drop-down list
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getFirstname() . ' ' . $this->getLastname() ?: "";
    }
}

