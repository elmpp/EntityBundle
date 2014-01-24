<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * GateWalkTime
 */
class GateWalkTime
{
    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("id")
     */
    private $id;

    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("time")
     */
    private $time;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\Gate
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\Gate")
     * @JMS\SerializedName("FromGate")
     */
    private $FromGate;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\Gate
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\Gate")
     * @JMS\SerializedName("ToGate")
     */
    private $ToGate;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\WalkTimeClass
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\WalkTimeClass")
     * @JMS\SerializedName("WalkTimeClass")
     */
    private $WalkTimeClass;


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
     * Set time
     *
     * @param integer $time
     * @return GateWalkTime
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return integer 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set FromGate
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\Gate $fromGate
     * @return GateWalkTime
     */
    public function setFromGate(\BorderForce\Drt\EntityBundle\Entity\Gate $fromGate = null)
    {
        $this->FromGate = $fromGate;

        return $this;
    }

    /**
     * Get FromGate
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\Gate 
     */
    public function getFromGate()
    {
        return $this->FromGate;
    }

    /**
     * Set ToGate
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\Gate $toGate
     * @return GateWalkTime
     */
    public function setToGate(\BorderForce\Drt\EntityBundle\Entity\Gate $toGate = null)
    {
        $this->ToGate = $toGate;

        return $this;
    }

    /**
     * Get ToGate
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\Gate 
     */
    public function getToGate()
    {
        return $this->ToGate;
    }

    /**
     * Set WalkTimeClass
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\WalkTimeClass $walkTimeClass
     * @return GateWalkTime
     */
    public function setWalkTimeClass(\BorderForce\Drt\EntityBundle\Entity\WalkTimeClass $walkTimeClass = null)
    {
        $this->WalkTimeClass = $walkTimeClass;

        return $this;
    }

    /**
     * Get WalkTimeClass
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\WalkTimeClass 
     */
    public function getWalkTimeClass()
    {
        return $this->WalkTimeClass;
    }
}
