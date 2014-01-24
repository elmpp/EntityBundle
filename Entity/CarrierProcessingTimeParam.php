<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * CarrierProcessingTimeParam
 */
class CarrierProcessingTimeParam extends TimeParam
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
     * @return CarrierProcessingTimeParam
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
}
