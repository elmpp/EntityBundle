<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * TerminalProcessingTime
 */
class TerminalProcessingTime
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
     * @var \BorderForce\Drt\EntityBundle\Entity\ProcessTimeClass
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\ProcessTimeClass")
     * @JMS\SerializedName("ProcessTimeClass")
     */
    private $ProcessTimeClass;


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
     * @return TerminalProcessingTime
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
     * @return TerminalProcessingTime
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
     * Set ProcessTimeClass
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\ProcessTimeClass $processTimeClass
     * @return TerminalProcessingTime
     */
    public function setProcessTimeClass(\BorderForce\Drt\EntityBundle\Entity\ProcessTimeClass $processTimeClass = null)
    {
        $this->ProcessTimeClass = $processTimeClass;

        return $this;
    }

    /**
     * Get ProcessTimeClass
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\ProcessTimeClass 
     */
    public function getProcessTimeClass()
    {
        return $this->ProcessTimeClass;
    }
}
