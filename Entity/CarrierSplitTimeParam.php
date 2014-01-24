<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * CarrierSplitTimeParam
 */
class CarrierSplitTimeParam extends TimeParam
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
     * @var \BorderForce\Drt\EntityBundle\Entity\CarrierSplitTime
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\CarrierSplitTime")
     * @JMS\SerializedName("CarrierSplitTime")
     */
    private $CarrierSplitTime;


    /**
     * Set DayOfWeek
     *
     * @param string $dayOfWeek
     * @return CarrierSplitTimeParam
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
     * @return CarrierSplitTimeParam
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
     * Set CarrierSplitTime
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\CarrierSplitTime $carrierSplitTime
     * @return CarrierSplitTimeParam
     */
    public function setCarrierSplitTime(\BorderForce\Drt\EntityBundle\Entity\CarrierSplitTime $carrierSplitTime = null)
    {
        $this->CarrierSplitTime = $carrierSplitTime;

        return $this;
    }

    /**
     * Get CarrierSplitTime
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\CarrierSplitTime 
     */
    public function getCarrierSplitTime()
    {
        return $this->CarrierSplitTime;
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
     * @return CarrierSplitTimeParam
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
