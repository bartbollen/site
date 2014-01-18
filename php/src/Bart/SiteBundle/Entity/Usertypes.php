<?php

namespace Bart\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usertypes
 */
class Usertypes
{
    /**
     * @var string
     */
    private $function;

    /**
     * @var integer
     */
    private $userrole;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set function
     *
     * @param string $function
     * @return Usertypes
     */
    public function setFunction($function)
    {
        $this->function = $function;

        return $this;
    }

    /**
     * Get function
     *
     * @return string 
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Set userrole
     *
     * @param integer $userrole
     * @return Usertypes
     */
    public function setUserrole($userrole)
    {
        $this->userrole = $userrole;

        return $this;
    }

    /**
     * Get userrole
     *
     * @return integer 
     */
    public function getUserrole()
    {
        return $this->userrole;
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
