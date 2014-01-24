<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * CarrierDetails
 */
class CarrierDetails
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
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("paxOffRate")
     */
    private $paxOffRate;

    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("carrierCapacity")
     */
    private $carrierCapacity;

    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("firstPaxOffTime")
     */
    private $firstPaxOffTime;

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
     * @JMS\SerializedName("LocalPort")
     */
    private $LocalPort;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\BasePort
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\BasePort")
     * @JMS\SerializedName("OriginPort")
     */
    private $OriginPort;


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
     * @return CarrierDetails
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
     * Set paxOffRate
     *
     * @param integer $paxOffRate
     * @return CarrierDetails
     */
    public function setPaxOffRate($paxOffRate)
    {
        $this->paxOffRate = $paxOffRate;

        return $this;
    }

    /**
     * Get paxOffRate
     *
     * @return integer 
     */
    public function getPaxOffRate()
    {
        return $this->paxOffRate;
    }

    /**
     * Set carrierCapacity
     *
     * @param integer $carrierCapacity
     * @return CarrierDetails
     */
    public function setCarrierCapacity($carrierCapacity)
    {
        $this->carrierCapacity = $carrierCapacity;

        return $this;
    }

    /**
     * Get carrierCapacity
     *
     * @return integer 
     */
    public function getCarrierCapacity()
    {
        return $this->carrierCapacity;
    }

    /**
     * Set firstPaxOffTime
     *
     * @param integer $firstPaxOffTime
     * @return CarrierDetails
     */
    public function setFirstPaxOffTime($firstPaxOffTime)
    {
        $this->firstPaxOffTime = $firstPaxOffTime;

        return $this;
    }

    /**
     * Get firstPaxOffTime
     *
     * @return integer 
     */
    public function getFirstPaxOffTime()
    {
        return $this->firstPaxOffTime;
    }

    /**
     * Set avgWalkTime
     *
     * @param integer $avgWalkTime
     * @return CarrierDetails
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
     * @return CarrierDetails
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
     * @return CarrierDetails
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
     * @return CarrierDetails
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
     * Set LocalPort
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\Port $localPort
     * @return CarrierDetails
     */
    public function setLocalPort(\BorderForce\Drt\EntityBundle\Entity\Port $localPort = null)
    {
        $this->LocalPort = $localPort;

        return $this;
    }

    /**
     * Get LocalPort
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\Port 
     */
    public function getLocalPort()
    {
        return $this->LocalPort;
    }

    /**
     * Set OriginPort
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\BasePort $originPort
     * @return CarrierDetails
     */
    public function setOriginPort(\BorderForce\Drt\EntityBundle\Entity\BasePort $originPort = null)
    {
        $this->OriginPort = $originPort;

        return $this;
    }

    /**
     * Get OriginPort
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\BasePort 
     */
    public function getOriginPort()
    {
        return $this->OriginPort;
    }
    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("carrier_type_id")
     */
    private $carrier_type_id;


    /**
     * Set carrier_type_id
     *
     * @param integer $carrierTypeId
     * @return CarrierDetails
     */
    public function setCarrierTypeId($carrierTypeId)
    {
        $this->carrier_type_id = $carrierTypeId;

        return $this;
    }

    /**
     * Get carrier_type_id
     *
     * @return integer 
     */
    public function getCarrierTypeId()
    {
        return $this->carrier_type_id;
    }
}
