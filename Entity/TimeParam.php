<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * TimeParam
 */
class TimeParam
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
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("HourOfDay")
     */
    private $HourOfDay;

    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("ParamValue")
     */
    private $ParamValue;

    /**
     * @var boolean
     * @JMS\Type("boolean")
     * @JMS\SerializedName("isPercent")
     */
    private $isPercent;


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
     * Set DayOfWeek
     *
     * @param string $dayOfWeek
     * @return TimeParam
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
     * @return TimeParam
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
     * Set HourOfDay
     *
     * @param integer $hourOfDay
     * @return TimeParam
     */
    public function setHourOfDay($hourOfDay)
    {
        $this->HourOfDay = $hourOfDay;

        return $this;
    }

    /**
     * Get HourOfDay
     *
     * @return integer 
     */
    public function getHourOfDay()
    {
        return $this->HourOfDay;
    }

    /**
     * Set ParamValue
     *
     * @param integer $paramValue
     * @return TimeParam
     */
    public function setParamValue($paramValue)
    {
        $this->ParamValue = $paramValue;

        return $this;
    }

    /**
     * Get ParamValue
     *
     * @return integer 
     */
    public function getParamValue()
    {
        return $this->ParamValue;
    }

    /**
     * Set isPercent
     *
     * @param boolean $isPercent
     * @return TimeParam
     */
    public function setIsPercent($isPercent)
    {
        $this->isPercent = $isPercent;

        return $this;
    }

    /**
     * Get isPercent
     *
     * @return boolean 
     */
    public function getIsPercent()
    {
        return $this->isPercent;
    }
    /**
     * @var boolean
     * @JMS\Type("boolean")
     * @JMS\SerializedName("hasDayOfWeek")
     */
    private $hasDayOfWeek;

    /**
     * @var boolean
     * @JMS\Type("boolean")
     * @JMS\SerializedName("hasMonthOfYear")
     */
    private $hasMonthOfYear;

    /**
     * @var boolean
     * @JMS\Type("boolean")
     * @JMS\SerializedName("hasHourOfDay")
     */
    private $hasHourOfDay;

    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("HourOfDaySlice")
     */
    private $HourOfDaySlice;


    /**
     * Set hasDayOfWeek
     *
     * @param boolean $hasDayOfWeek
     * @return TimeParam
     */
    public function setHasDayOfWeek($hasDayOfWeek)
    {
        $this->hasDayOfWeek = $hasDayOfWeek;

        return $this;
    }

    /**
     * Get hasDayOfWeek
     *
     * @return boolean
     */
    public function getHasDayOfWeek()
    {
        return $this->hasDayOfWeek;
    }

    /**
     * Set hasMonthOfYear
     *
     * @param boolean $hasMonthOfYear
     * @return TimeParam
     */
    public function setHasMonthOfYear($hasMonthOfYear)
    {
        $this->hasMonthOfYear = $hasMonthOfYear;

        return $this;
    }

    /**
     * Get hasMonthOfYear
     *
     * @return boolean
     */
    public function getHasMonthOfYear()
    {
        return $this->hasMonthOfYear;
    }

    /**
     * Set hasHourOfDay
     *
     * @param boolean $hasHourOfDay
     * @return TimeParam
     */
    public function setHasHourOfDay($hasHourOfDay)
    {
        $this->hasHourOfDay = $hasHourOfDay;

        return $this;
    }

    /**
     * Get hasHourOfDay
     *
     * @return boolean
     */
    public function getHasHourOfDay()
    {
        return $this->hasHourOfDay;
    }

    /**
     * Set HourOfDaySlice
     *
     * @param integer $hourOfDaySlice
     * @return TimeParam
     */
    public function setHourOfDaySlice($hourOfDaySlice)
    {
        $this->HourOfDaySlice = $hourOfDaySlice;

        return $this;
    }

    /**
     * Get HourOfDaySlice
     *
     * @return integer 
     */
    public function getHourOfDaySlice()
    {
        return $this->HourOfDaySlice;
    }
}
