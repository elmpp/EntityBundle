<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * TerminalQueueTimeParam
 */
class TerminalQueueTimeParam extends TimeParam
{
    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("HourOfDay")
     */
    private $HourOfDay;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\TerminalQueue
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\TerminalQueue")
     * @JMS\SerializedName("TerminalQueue")
     */
    private $TerminalQueue;


    /**
     * Set HourOfDay
     *
     * @param integer $hourOfDay
     * @return TerminalQueueTimeParam
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
     * Set TerminalQueue
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\TerminalQueue $terminalQueue
     * @return TerminalQueueTimeParam
     */
    public function setTerminalQueue(\BorderForce\Drt\EntityBundle\Entity\TerminalQueue $terminalQueue = null)
    {
        $this->TerminalQueue = $terminalQueue;

        return $this;
    }

    /**
     * Get TerminalQueue
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\TerminalQueue 
     */
    public function getTerminalQueue()
    {
        return $this->TerminalQueue;
    }
}
