<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * TerminalPaxSplit
 */
class TerminalPaxSplit
{
    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("id")
     */
    private $id;

    /**
     * @var bool
     * @JMS\Type("bool")
     * @JMS\SerializedName("active")
     */
    private $active;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\Terminal
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\Terminal")
     * @JMS\SerializedName("Terminal")
     */
    private $Terminal;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\PaxSplitClass
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\PaxSplitClass")
     * @JMS\SerializedName("PaxSplitClass")
     */
    private $PaxSplitClass;


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
     * Set active
     *
     * @param \bool $active
     * @return TerminalPaxSplit
     */
    public function setActive(\bool $active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return \bool 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set Terminal
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\Terminal $terminal
     * @return TerminalPaxSplit
     */
    public function setTerminal(\BorderForce\Drt\EntityBundle\Entity\Terminal $terminal = null)
    {
        $this->Terminal = $terminal;

        return $this;
    }

    /**
     * Get Terminal
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\Terminal 
     */
    public function getTerminal()
    {
        return $this->Terminal;
    }

    /**
     * Set PaxSplitClass
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\PaxSplitClass $paxSplitClass
     * @return TerminalPaxSplit
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
