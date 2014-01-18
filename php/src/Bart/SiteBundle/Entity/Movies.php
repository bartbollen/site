<?php

namespace Bart\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movies
 */
class Movies
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $genreid;

    /**
     * @var string
     */
    private $trailer;

    /**
     * @var \DateTime
     */
    private $dateadded;

    /**
     * @var integer
     */
    private $publicationyear;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     * @return Movies
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set genreid
     *
     * @param integer $genreid
     * @return Movies
     */
    public function setGenreid($genreid)
    {
        $this->genreid = $genreid;

        return $this;
    }

    /**
     * Get genreid
     *
     * @return integer 
     */
    public function getGenreid()
    {
        return $this->genreid;
    }

    /**
     * Set trailer
     *
     * @param string $trailer
     * @return Movies
     */
    public function setTrailer($trailer)
    {
        $this->trailer = $trailer;

        return $this;
    }

    /**
     * Get trailer
     *
     * @return string 
     */
    public function getTrailer()
    {
        return $this->trailer;
    }

    /**
     * Set dateadded
     *
     * @param \DateTime $dateadded
     * @return Movies
     */
    public function setDateadded($dateadded)
    {
        $this->dateadded = $dateadded;

        return $this;
    }

    /**
     * Get dateadded
     *
     * @return \DateTime 
     */
    public function getDateadded()
    {
        return $this->dateadded;
    }

    /**
     * Set publicationyear
     *
     * @param integer $publicationyear
     * @return Movies
     */
    public function setPublicationyear($publicationyear)
    {
        $this->publicationyear = $publicationyear;

        return $this;
    }

    /**
     * Get publicationyear
     *
     * @return integer 
     */
    public function getPublicationyear()
    {
        return $this->publicationyear;
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
}
