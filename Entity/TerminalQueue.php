<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * TerminalQueue
 */
class TerminalQueue
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
     * @JMS\SerializedName("manned")
     */
    private $manned;

    /**
     * @var boolean
     * @JMS\Type("boolean")
     * @JMS\SerializedName("active")
     */
    private $active;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("color")
     */
    private $color;

    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("sla")
     */
    private $sla;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\Terminal
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\Terminal")
     * @JMS\SerializedName("Terminal")
     */
    private $Terminal;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\QueueClass
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\QueueClass")
     * @JMS\SerializedName("QueueClass")
     */
    private $QueueClass;


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
     * Set manned
     *
     * @param boolean $manned
     * @return TerminalQueue
     */
    public function setManned($manned)
    {
        $this->manned = $manned;

        return $this;
    }

    /**
     * Get manned
     *
     * @return boolean 
     */
    public function getManned()
    {
        return $this->manned;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return TerminalQueue
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
     * Set color
     *
     * @param string $color
     * @return TerminalQueue
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set sla
     *
     * @param integer $sla
     * @return TerminalQueue
     */
    public function setSla($sla)
    {
        $this->sla = $sla;

        return $this;
    }

    /**
     * Get sla
     *
     * @return integer 
     */
    public function getSla()
    {
        return $this->sla;
    }

    /**
     * Set Terminal
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\Terminal $terminal
     * @return TerminalQueue
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
     * Set QueueClass
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\QueueClass $queueClass
     * @return TerminalQueue
     */
    public function setQueueClass(\BorderForce\Drt\EntityBundle\Entity\QueueClass $queueClass = null)
    {
        $this->QueueClass = $queueClass;

        return $this;
    }

    /**
     * Get QueueClass
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\QueueClass 
     */
    public function getQueueClass()
    {
        return $this->QueueClass;
    }
}
