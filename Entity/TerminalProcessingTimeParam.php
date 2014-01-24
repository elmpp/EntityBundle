<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * TerminalProcessingTimeParam
 */
class TerminalProcessingTimeParam extends TimeParam
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
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("HourOfDay")
     */
    private $HourOfDay;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\TerminalProcessingTime
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\TerminalProcessingTime")
     * @JMS\SerializedName("TerminalProcessingTime")
     */
    private $TerminalProcessingTime;


    /**
     * Set DayOfWeek
     *
     * @param string $dayOfWeek
     * @return TerminalProcessingTimeParam
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
     * @return TerminalProcessingTimeParam
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
     * @return TerminalProcessingTimeParam
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
     * Set TerminalProcessingTime
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\TerminalProcessingTime $terminalProcessingTime
     * @return TerminalProcessingTimeParam
     */
    public function setTerminalProcessingTime(\BorderForce\Drt\EntityBundle\Entity\TerminalProcessingTime $terminalProcessingTime = null)
    {
        $this->TerminalProcessingTime = $terminalProcessingTime;

        return $this;
    }

    /**
     * Get TerminalProcessingTime
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\TerminalProcessingTime 
     */
    public function getTerminalProcessingTime()
    {
        return $this->TerminalProcessingTime;
    }
    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\TerminalProcessTime
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\TerminalProcessTime")
     * @JMS\SerializedName("TerminalProcessTime")
     */
    private $TerminalProcessTime;


    /**
     * Set TerminalProcessTime
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\TerminalProcessTime $terminalProcessTime
     * @return TerminalProcessingTimeParam
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
}
