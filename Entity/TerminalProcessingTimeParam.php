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
