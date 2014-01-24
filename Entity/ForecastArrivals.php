<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * ForecastArrivals
 */
class ForecastArrivals
{
    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("id")
     */
    private $id;

    /**
     * @var \DateTime
     * @JMS\Type("DateTime")
     * @JMS\SerializedName("scheduledDate")
     */
    private $scheduledDate;

    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("type")
     */
    private $type;

    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("passengersDirect")
     */
    private $passengersDirect;

    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("passengersTransfer")
     */
    private $passengersTransfer;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\Gate
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\Gate")
     * @JMS\SerializedName("Gate")
     */
    private $Gate;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\CarrierDetails
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\CarrierDetails")
     * @JMS\SerializedName("CarrierDetails")
     */
    private $CarrierDetails;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\BasePort
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\BasePort")
     * @JMS\SerializedName("BasePort")
     */
    private $BasePort;


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
     * Set scheduledDate
     *
     * @param \DateTime $scheduledDate
     * @return ForecastArrivals
     */
    public function setScheduledDate($scheduledDate)
    {
        $this->scheduledDate = $scheduledDate;

        return $this;
    }

    /**
     * Get scheduledDate
     *
     * @return \DateTime 
     */
    public function getScheduledDate()
    {
        return $this->scheduledDate;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return ForecastArrivals
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set passengersDirect
     *
     * @param integer $passengersDirect
     * @return ForecastArrivals
     */
    public function setPassengersDirect($passengersDirect)
    {
        $this->passengersDirect = $passengersDirect;

        return $this;
    }

    /**
     * Get passengersDirect
     *
     * @return integer 
     */
    public function getPassengersDirect()
    {
        return $this->passengersDirect;
    }

    /**
     * Set passengersTransfer
     *
     * @param integer $passengersTransfer
     * @return ForecastArrivals
     */
    public function setPassengersTransfer($passengersTransfer)
    {
        $this->passengersTransfer = $passengersTransfer;

        return $this;
    }

    /**
     * Get passengersTransfer
     *
     * @return integer 
     */
    public function getPassengersTransfer()
    {
        return $this->passengersTransfer;
    }

    /**
     * Set Gate
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\Gate $gate
     * @return ForecastArrivals
     */
    public function setGate(\BorderForce\Drt\EntityBundle\Entity\Gate $gate = null)
    {
        $this->Gate = $gate;

        return $this;
    }

    /**
     * Get Gate
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\Gate 
     */
    public function getGate()
    {
        return $this->Gate;
    }

    /**
     * Set CarrierDetails
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\CarrierDetails $carrierDetails
     * @return ForecastArrivals
     */
    public function setCarrierDetails(\BorderForce\Drt\EntityBundle\Entity\CarrierDetails $carrierDetails = null)
    {
        $this->CarrierDetails = $carrierDetails;

        return $this;
    }

    /**
     * Get CarrierDetails
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\CarrierDetails 
     */
    public function getCarrierDetails()
    {
        return $this->CarrierDetails;
    }

    /**
     * Set BasePort
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\BasePort $basePort
     * @return ForecastArrivals
     */
    public function setBasePort(\BorderForce\Drt\EntityBundle\Entity\BasePort $basePort = null)
    {
        $this->BasePort = $basePort;

        return $this;
    }

    /**
     * Get BasePort
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\BasePort 
     */
    public function getBasePort()
    {
        return $this->BasePort;
    }
}
