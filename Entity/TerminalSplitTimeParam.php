<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * TerminalSplitTimeParam
 */
class TerminalSplitTimeParam extends TimeParam
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
     * @var \BorderForce\Drt\EntityBundle\Entity\TerminalSplitTime
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\TerminalSplitTime")
     * @JMS\SerializedName("TerminalSplitTime")
     */
    private $TerminalSplitTime;


    /**
     * Set DayOfWeek
     *
     * @param string $dayOfWeek
     * @return TerminalSplitTimeParam
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
     * @return TerminalSplitTimeParam
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
     * @return TerminalSplitTimeParam
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
     * Set TerminalSplitTime
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\TerminalSplitTime $terminalSplitTime
     * @return TerminalSplitTimeParam
     */
    public function setTerminalSplitTime(\BorderForce\Drt\EntityBundle\Entity\TerminalSplitTime $terminalSplitTime = null)
    {
        $this->TerminalSplitTime = $terminalSplitTime;

        return $this;
    }

    /**
     * Get TerminalSplitTime
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\TerminalSplitTime 
     */
    public function getTerminalSplitTime()
    {
        return $this->TerminalSplitTime;
    }
    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\TerminalPaxSplit
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\TerminalPaxSplit")
     * @JMS\SerializedName("TerminalPaxSplit")
     */
    private $TerminalPaxSplit;


    /**
     * Set TerminalPaxSplit
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\TerminalPaxSplit $terminalPaxSplit
     * @return TerminalSplitTimeParam
     */
    public function setTerminalPaxSplit(\BorderForce\Drt\EntityBundle\Entity\TerminalPaxSplit $terminalPaxSplit = null)
    {
        $this->TerminalPaxSplit = $terminalPaxSplit;

        return $this;
    }

    /**
     * Get TerminalPaxSplit
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\TerminalPaxSplit 
     */
    public function getTerminalPaxSplit()
    {
        return $this->TerminalPaxSplit;
    }
}
