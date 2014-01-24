<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * TerminalFixedPoint
 */
class TerminalFixedPoint
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
     * @var \BorderForce\Drt\EntityBundle\Entity\FixedPointType
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\FixedPointType")
     * @JMS\SerializedName("FixedPointsTypes")
     */
    private $FixedPointsTypes;


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
     * @return TerminalFixedPoint
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
     * @return TerminalFixedPoint
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
     * Set FixedPointsTypes
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\FixedPointType $fixedPointsTypes
     * @return TerminalFixedPoint
     */
    public function setFixedPointsTypes(\BorderForce\Drt\EntityBundle\Entity\FixedPointType $fixedPointsTypes = null)
    {
        $this->FixedPointsTypes = $fixedPointsTypes;

        return $this;
    }

    /**
     * Get FixedPointsTypes
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\FixedPointType 
     */
    public function getFixedPointsTypes()
    {
        return $this->FixedPointsTypes;
    }
}
