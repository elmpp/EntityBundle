<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * TerminalFixedPointParam
 */
class TerminalFixedPointParam extends TimeParam
{
    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("HourOfDay")
     */
    private $HourOfDay;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\TerminalFixedPoint
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\TerminalFixedPoint")
     * @JMS\SerializedName("TerminalFixedPoint")
     */
    private $TerminalFixedPoint;


    /**
     * Set HourOfDay
     *
     * @param integer $hourOfDay
     * @return TerminalFixedPointParam
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
     * Set TerminalFixedPoint
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\TerminalFixedPoint $terminalFixedPoint
     * @return TerminalFixedPointParam
     */
    public function setTerminalFixedPoint(\BorderForce\Drt\EntityBundle\Entity\TerminalFixedPoint $terminalFixedPoint = null)
    {
        $this->TerminalFixedPoint = $terminalFixedPoint;

        return $this;
    }

    /**
     * Get TerminalFixedPoint
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\TerminalFixedPoint 
     */
    public function getTerminalFixedPoint()
    {
        return $this->TerminalFixedPoint;
    }
}
