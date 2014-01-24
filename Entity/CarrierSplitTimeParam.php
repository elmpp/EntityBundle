<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * CarrierSplitTimeParam
 */
class CarrierSplitTimeParam extends TimeParam
{
    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\CarrierDetails
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\CarrierDetails")
     * @JMS\SerializedName("CarrierDetails")
     */
    private $CarrierDetails;


    /**
     * Set CarrierDetails
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\CarrierDetails $carrierDetails
     * @return CarrierSplitTimeParam
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
     * @var \BorderForce\Drt\EntityBundle\Entity\PaxSplitClass
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\PaxSplitClass")
     * @JMS\SerializedName("PaxSplitClass")
     */
    private $PaxSplitClass;


    /**
     * Set PaxSplitClass
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\PaxSplitClass $paxSplitClass
     * @return CarrierSplitTimeParam
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
    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\CarrierPaxSplit
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\CarrierPaxSplit")
     * @JMS\SerializedName("CarrierPaxSplit")
     */
    private $CarrierPaxSplit;


    /**
     * Set CarrierPaxSplit
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\CarrierPaxSplit $carrierPaxSplit
     * @return CarrierSplitTimeParam
     */
    public function setCarrierPaxSplit(\BorderForce\Drt\EntityBundle\Entity\CarrierPaxSplit $carrierPaxSplit = null)
    {
        $this->CarrierPaxSplit = $carrierPaxSplit;

        return $this;
    }

    /**
     * Get CarrierPaxSplit
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\CarrierPaxSplit 
     */
    public function getCarrierPaxSplit()
    {
        return $this->CarrierPaxSplit;
    }
}
