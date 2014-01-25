<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Terminal
 */
class Terminal
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
     * @JMS\SerializedName("code")
     */
    private $code;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    private $name;

    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("avgWalkTime")
     */
    private $avgWalkTime;

    /**
     * @var \DateTime
     * @JMS\Type("DateTime")
     * @JMS\SerializedName("avgWalkTimeDateTime")
     */
    private $avgWalkTimeDateTime;

    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("avgChoxTime")
     */
    private $avgChoxTime;

    /**
     * @var \DateTime
     * @JMS\Type("DateTime")
     * @JMS\SerializedName("avgChoxTimeDateTime")
     */
    private $avgChoxTimeDateTime;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\Port
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\Port")
     * @JMS\SerializedName("Port")
     */
    private $Port;


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
     * Set code
     *
     * @param string $code
     * @return Terminal
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Terminal
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
     * Set avgWalkTime
     *
     * @param integer $avgWalkTime
     * @return Terminal
     */
    public function setAvgWalkTime($avgWalkTime)
    {
        $this->avgWalkTime = $avgWalkTime;

        return $this;
    }

    /**
     * Get avgWalkTime
     *
     * @return integer 
     */
    public function getAvgWalkTime()
    {
        return $this->avgWalkTime;
    }

    /**
     * Set avgWalkTimeDateTime
     *
     * @param \DateTime $avgWalkTimeDateTime
     * @return Terminal
     */
    public function setAvgWalkTimeDateTime($avgWalkTimeDateTime)
    {
        $this->avgWalkTimeDateTime = $avgWalkTimeDateTime;

        return $this;
    }

    /**
     * Get avgWalkTimeDateTime
     *
     * @return \DateTime 
     */
    public function getAvgWalkTimeDateTime()
    {
        return $this->avgWalkTimeDateTime;
    }

    /**
     * Set avgChoxTime
     *
     * @param integer $avgChoxTime
     * @return Terminal
     */
    public function setAvgChoxTime($avgChoxTime)
    {
        $this->avgChoxTime = $avgChoxTime;

        return $this;
    }

    /**
     * Get avgChoxTime
     *
     * @return integer 
     */
    public function getAvgChoxTime()
    {
        return $this->avgChoxTime;
    }

    /**
     * Set avgChoxTimeDateTime
     *
     * @param \DateTime $avgChoxTimeDateTime
     * @return Terminal
     */
    public function setAvgChoxTimeDateTime($avgChoxTimeDateTime)
    {
        $this->avgChoxTimeDateTime = $avgChoxTimeDateTime;

        return $this;
    }

    /**
     * Get avgChoxTimeDateTime
     *
     * @return \DateTime 
     */
    public function getAvgChoxTimeDateTime()
    {
        return $this->avgChoxTimeDateTime;
    }

    /**
     * Set Port
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\Port $port
     * @return Terminal
     */
    public function setPort(\BorderForce\Drt\EntityBundle\Entity\Port $port = null)
    {
        $this->Port = $port;

        return $this;
    }

    /**
     * Get Port
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\Port 
     */
    public function getPort()
    {
        return $this->Port;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\Gate")
     * @JMS\SerializedName("Gates")
     */
    private $Gates;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Gates = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add Gates
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\Gate $gates
     * @return Terminal
     */
    public function addGate(\BorderForce\Drt\EntityBundle\Entity\Gate $gates)
    {
        $this->Gates[] = $gates;

        return $this;
    }

    /**
     * Remove Gates
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\Gate $gates
     */
    public function removeGate(\BorderForce\Drt\EntityBundle\Entity\Gate $gates)
    {
        $this->Gates->removeElement($gates);
    }

    /**
     * Get Gates
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGates()
    {
        return $this->Gates;
    }
}
