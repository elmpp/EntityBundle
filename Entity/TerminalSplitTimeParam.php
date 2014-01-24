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
    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\PaxSplitClass
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\PaxSplitClass")
     * @JMS\SerializedName("PaxSplitClass")
     */
    private $PaxSplitClass;


    /**
     * Set PaxSplitClass
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\PaxSplitClass $paxSplitClass
     * @return TerminalSplitTimeParam
     */
    public function setPaxSplitClass(\BorderForce\Drt\EntityBundle\Entity\PaxSplitClass $paxSplitClass = null)
    {
        $this->PaxSplitClass = $paxSplitClass;

        return $this;
    }

    /**
     * Get PaxSplitClass
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\PaxSplitClass 
     */
    public function getPaxSplitClass()
    {
        return $this->PaxSplitClass;
    }
}
