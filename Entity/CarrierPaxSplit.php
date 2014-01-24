<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * CarrierPaxSplit
 */
class CarrierPaxSplit
{
    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("id")
     */
    private $id;

    /**
     * @var boolean
     * @JMS\Type("boolean")
     * @JMS\SerializedName("active")
     */
    private $active;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\CarrierDetails
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\CarrierDetails")
     * @JMS\SerializedName("CarrierDetails")
     */
    private $CarrierDetails;

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
     * @param boolean $active
     * @return CarrierPaxSplit
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set CarrierDetails
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\CarrierDetails $carrierDetails
     * @return CarrierPaxSplit
     */
    public function setCarrierDetails(\BorderForce\Drt\EntityBundle\Entity\CarrierDetails $carrierDetails = null)
    {
        $this->CarrierDetails = $carrierDetails;

        return $this;
    }

    /**
     * Get CarrierDetails
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\CarrierDetails 
     */
    public function getCarrierDetails()
    {
        return $this->CarrierDetails;
    }

    /**
     * Set PaxSplitClass
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\PaxSplitClass $paxSplitClass
     * @return CarrierPaxSplit
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
