<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * TermConfig
 */
class TermConfig
{
    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("id")
     */
    private $id;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("formula")
     */
    private $formula;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\TerminalArchType
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\TerminalArchType")
     * @JMS\SerializedName("TerminalArchType")
     */
    private $TerminalArchType;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\TerminalQueue
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\TerminalQueue")
     * @JMS\SerializedName("TerminalQueue")
     */
    private $TerminalQueue;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\TerminalProcessTime
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\TerminalProcessTime")
     * @JMS\SerializedName("TerminalProcessTime")
     */
    private $TerminalProcessTime;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\TerminalWalkingTime
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\TerminalWalkingTime")
     * @JMS\SerializedName("TerminalWalkingTime")
     */
    private $TerminalWalkingTime;


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
     * Set formula
     *
     * @param string $formula
     * @return TermConfig
     */
    public function setFormula($formula)
    {
        $this->formula = $formula;

        return $this;
    }

    /**
     * Get formula
     *
     * @return string 
     */
    public function getFormula()
    {
        return $this->formula;
    }

    /**
     * Set TerminalArchType
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\TerminalArchType $terminalArchType
     * @return TermConfig
     */
    public function setTerminalArchType(\BorderForce\Drt\EntityBundle\Entity\TerminalArchType $terminalArchType = null)
    {
        $this->TerminalArchType = $terminalArchType;

        return $this;
    }

    /**
     * Get TerminalArchType
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\TerminalArchType 
     */
    public function getTerminalArchType()
    {
        return $this->TerminalArchType;
    }

    /**
     * Set TerminalQueue
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\TerminalQueue $terminalQueue
     * @return TermConfig
     */
    public function setTerminalQueue(\BorderForce\Drt\EntityBundle\Entity\TerminalQueue $terminalQueue = null)
    {
        $this->TerminalQueue = $terminalQueue;

        return $this;
    }

    /**
     * Get TerminalQueue
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\TerminalQueue 
     */
    public function getTerminalQueue()
    {
        return $this->TerminalQueue;
    }

    /**
     * Set TerminalProcessTime
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\TerminalProcessTime $terminalProcessTime
     * @return TermConfig
     */
    public function setTerminalProcessTime(\BorderForce\Drt\EntityBundle\Entity\TerminalProcessTime $terminalProcessTime = null)
    {
        $this->TerminalProcessTime = $terminalProcessTime;

        return $this;
    }

    /**
     * Get TerminalProcessTime
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\TerminalProcessTime 
     */
    public function getTerminalProcessTime()
    {
        return $this->TerminalProcessTime;
    }

    /**
     * Set TerminalWalkingTime
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\TerminalWalkingTime $terminalWalkingTime
     * @return TermConfig
     */
    public function setTerminalWalkingTime(\BorderForce\Drt\EntityBundle\Entity\TerminalWalkingTime $terminalWalkingTime = null)
    {
        $this->TerminalWalkingTime = $terminalWalkingTime;

        return $this;
    }

    /**
     * Get TerminalWalkingTime
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\TerminalWalkingTime 
     */
    public function getTerminalWalkingTime()
    {
        return $this->TerminalWalkingTime;
    }
    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\GateWalkTime
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\GateWalkTime")
     * @JMS\SerializedName("GateWalkTime")
     */
    private $GateWalkTime;


    /**
     * Set GateWalkTime
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\GateWalkTime $gateWalkTime
     * @return TermConfig
     */
    public function setGateWalkTime(\BorderForce\Drt\EntityBundle\Entity\GateWalkTime $gateWalkTime = null)
    {
        $this->GateWalkTime = $gateWalkTime;

        return $this;
    }

    /**
     * Get GateWalkTime
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\GateWalkTime 
     */
    public function getGateWalkTime()
    {
        return $this->GateWalkTime;
    }
}
