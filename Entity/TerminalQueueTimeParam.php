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
     * @var \BorderForce\Drt\EntityBundle\Entity\TerminalQueue
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\TerminalQueue")
     * @JMS\SerializedName("TerminalQueue")
     */
    private $TerminalQueue;


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
