<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * CarrierProcessingTimeParam
 */
class CarrierProcessingTimeParam extends TimeParam
{
    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("DayOfWeek")
     */
    private $DayOfWeek;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("MonthOfYear")
     */
    private $MonthOfYear;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\CarrierProcessingTime
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\CarrierProcessingTime")
     * @JMS\SerializedName("CarrierProcessingTime")
     */
    private $CarrierProcessingTime;


    /**
     * Set DayOfWeek
     *
     * @param string $dayOfWeek
     * @return CarrierProcessingTimeParam
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->DayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * Get DayOfWeek
     *
     * @return string 
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }

    /**
     * Set MonthOfYear
     *
     * @param string $monthOfYear
     * @return CarrierProcessingTimeParam
     */
    public function setMonthOfYear($monthOfYear)
    {
        $this->MonthOfYear = $monthOfYear;

        return $this;
    }

    /**
     * Get MonthOfYear
     *
     * @return string 
     */
    public function getMonthOfYear()
    {
        return $this->MonthOfYear;
    }

    /**
     * Set CarrierProcessingTime
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\CarrierProcessingTime $carrierProcessingTime
     * @return CarrierProcessingTimeParam
     */
    public function setCarrierProcessingTime(\BorderForce\Drt\EntityBundle\Entity\CarrierProcessingTime $carrierProcessingTime = null)
    {
        $this->CarrierProcessingTime = $carrierProcessingTime;

        return $this;
    }

    /**
     * Get CarrierProcessingTime
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\CarrierProcessingTime 
     */
    public function getCarrierProcessingTime()
    {
        return $this->CarrierProcessingTime;
    }
    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\CarrierDetails
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\CarrierDetails")
     * @JMS\SerializedName("CarrierDetails")
     */
    private $CarrierDetails;


    /**
     * Set CarrierDetails
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\CarrierDetails $carrierDetails
     * @return CarrierProcessingTimeParam
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
}
