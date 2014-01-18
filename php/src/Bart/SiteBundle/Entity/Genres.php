<?php

namespace Bart\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genres
 */
class Genres
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $languageid;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     * @return Genres
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
     * Set languageid
     *
     * @param integer $languageid
     * @return Genres
     */
    public function setLanguageid($languageid)
    {
        $this->languageid = $languageid;

        return $this;
    }

    /**
     * Get languageid
     *
     * @return integer 
     */
    public function getLanguageid()
    {
        return $this->languageid;
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
