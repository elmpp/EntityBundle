<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * TerminalArchType
 */
class TerminalArchType
{
    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("id")
     */
    private $id;

    /**
     * @var boolean
     * @JMS\Type("boolean")
     * @JMS\SerializedName("active")
     */
    private $active;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\Terminal
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\Terminal")
     * @JMS\SerializedName("Terminal")
     */
    private $Terminal;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\ArchyTypeClass
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\ArchyTypeClass")
     * @JMS\SerializedName("ArchyTypeClass")
     */
    private $ArchyTypeClass;


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
     * Set active
     *
     * @param boolean $active
     * @return TerminalArchType
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set Terminal
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\Terminal $terminal
     * @return TerminalArchType
     */
    public function setTerminal(\BorderForce\Drt\EntityBundle\Entity\Terminal $terminal = null)
    {
        $this->Terminal = $terminal;

        return $this;
    }

    /**
     * Get Terminal
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\Terminal 
     */
    public function getTerminal()
    {
        return $this->Terminal;
    }

    /**
     * Set ArchyTypeClass
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\ArchyTypeClass $archyTypeClass
     * @return TerminalArchType
     */
    public function setArchyTypeClass(\BorderForce\Drt\EntityBundle\Entity\ArchyTypeClass $archyTypeClass = null)
    {
        $this->ArchyTypeClass = $archyTypeClass;

        return $this;
    }

    /**
     * Get ArchyTypeClass
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\ArchyTypeClass 
     */
    public function getArchyTypeClass()
    {
        return $this->ArchyTypeClass;
    }
}
