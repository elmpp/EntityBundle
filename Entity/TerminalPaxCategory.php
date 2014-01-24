<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * TerminalPaxCategory
 */
class TerminalPaxCategory
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
     * @var \BorderForce\Drt\EntityBundle\Entity\PaxCategoryClass
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\PaxCategoryClass")
     * @JMS\SerializedName("PaxCategoryClass")
     */
    private $PaxCategoryClass;


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
     * @return TerminalPaxCategory
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
     * @return TerminalPaxCategory
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
     * Set PaxCategoryClass
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\PaxCategoryClass $paxCategoryClass
     * @return TerminalPaxCategory
     */
    public function setPaxCategoryClass(\BorderForce\Drt\EntityBundle\Entity\PaxCategoryClass $paxCategoryClass = null)
    {
        $this->PaxCategoryClass = $paxCategoryClass;

        return $this;
    }

    /**
     * Get PaxCategoryClass
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\PaxCategoryClass 
     */
    public function getPaxCategoryClass()
    {
        return $this->PaxCategoryClass;
    }
}
