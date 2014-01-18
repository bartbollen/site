<?php

namespace Bart\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Staticvalues
 */
class Staticvalues
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $sectionid;

    /**
     * @var string
     */
    private $value;

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
     * @return Staticvalues
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
     * Set sectionid
     *
     * @param integer $sectionid
     * @return Staticvalues
     */
    public function setSectionid($sectionid)
    {
        $this->sectionid = $sectionid;

        return $this;
    }

    /**
     * Get sectionid
     *
     * @return integer 
     */
    public function getSectionid()
    {
        return $this->sectionid;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return Staticvalues
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set languageid
     *
     * @param integer $languageid
     * @return Staticvalues
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
