<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * ActualArrivals
 */
class ActualArrivals
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
     * @var \DateTime
     * @JMS\Type("DateTime")
     * @JMS\SerializedName("estimated")
     */
    private $estimated;

    /**
     * @var \DateTime
     * @JMS\Type("DateTime")
     * @JMS\SerializedName("touchdown")
     */
    private $touchdown;

    /**
     * @var \DateTime
     * @JMS\Type("DateTime")
     * @JMS\SerializedName("choxEstimated")
     */
    private $choxEstimated;

    /**
     * @var \DateTime
     * @JMS\Type("DateTime")
     * @JMS\SerializedName("actualChox")
     */
    private $actualChox;

    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("passengersTotal")
     */
    private $passengersTotal;

    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("passengersIntInt")
     */
    private $passengersIntInt;

    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("passengersIntDom")
     */
    private $passengersIntDom;

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
     * @return ActualArrivals
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
     * Set estimated
     *
     * @param \DateTime $estimated
     * @return ActualArrivals
     */
    public function setEstimated($estimated)
    {
        $this->estimated = $estimated;

        return $this;
    }

    /**
     * Get estimated
     *
     * @return \DateTime 
     */
    public function getEstimated()
    {
        return $this->estimated;
    }

    /**
     * Set touchdown
     *
     * @param \DateTime $touchdown
     * @return ActualArrivals
     */
    public function setTouchdown($touchdown)
    {
        $this->touchdown = $touchdown;

        return $this;
    }

    /**
     * Get touchdown
     *
     * @return \DateTime 
     */
    public function getTouchdown()
    {
        return $this->touchdown;
    }

    /**
     * Set choxEstimated
     *
     * @param \DateTime $choxEstimated
     * @return ActualArrivals
     */
    public function setChoxEstimated($choxEstimated)
    {
        $this->choxEstimated = $choxEstimated;

        return $this;
    }

    /**
     * Get choxEstimated
     *
     * @return \DateTime 
     */
    public function getChoxEstimated()
    {
        return $this->choxEstimated;
    }

    /**
     * Set actualChox
     *
     * @param \DateTime $actualChox
     * @return ActualArrivals
     */
    public function setActualChox($actualChox)
    {
        $this->actualChox = $actualChox;

        return $this;
    }

    /**
     * Get actualChox
     *
     * @return \DateTime 
     */
    public function getActualChox()
    {
        return $this->actualChox;
    }

    /**
     * Set passengersTotal
     *
     * @param integer $passengersTotal
     * @return ActualArrivals
     */
    public function setPassengersTotal($passengersTotal)
    {
        $this->passengersTotal = $passengersTotal;

        return $this;
    }

    /**
     * Get passengersTotal
     *
     * @return integer 
     */
    public function getPassengersTotal()
    {
        return $this->passengersTotal;
    }

    /**
     * Set passengersIntInt
     *
     * @param integer $passengersIntInt
     * @return ActualArrivals
     */
    public function setPassengersIntInt($passengersIntInt)
    {
        $this->passengersIntInt = $passengersIntInt;

        return $this;
    }

    /**
     * Get passengersIntInt
     *
     * @return integer 
     */
    public function getPassengersIntInt()
    {
        return $this->passengersIntInt;
    }

    /**
     * Set passengersIntDom
     *
     * @param integer $passengersIntDom
     * @return ActualArrivals
     */
    public function setPassengersIntDom($passengersIntDom)
    {
        $this->passengersIntDom = $passengersIntDom;

        return $this;
    }

    /**
     * Get passengersIntDom
     *
     * @return integer 
     */
    public function getPassengersIntDom()
    {
        return $this->passengersIntDom;
    }

    /**
     * Set Gate
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\Gate $gate
     * @return ActualArrivals
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
     * @return ActualArrivals
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
     * @return ActualArrivals
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
