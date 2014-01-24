<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Port
 */
class Port extends BasePort
{
    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("region")
     */
    private $region;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\PortType
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\PortType")
     * @JMS\SerializedName("PortType")
     */
    private $PortType;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\PaxSplitClass")
     * @JMS\SerializedName("PaxSplits")
     */
    private $PaxSplits;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\PaxCategoryClass")
     * @JMS\SerializedName("PaxCategories")
     */
    private $PaxCategories;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\ProcessTimeClass")
     * @JMS\SerializedName("ProcessTimes")
     */
    private $ProcessTimes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\QueueClass")
     * @JMS\SerializedName("PortQueues")
     */
    private $PortQueues;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\ArchTypeClass")
     * @JMS\SerializedName("ArchTypes")
     */
    private $ArchTypes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\FixedPoint")
     * @JMS\SerializedName("FixedPoints")
     */
    private $FixedPoints;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->PaxSplits = new \Doctrine\Common\Collections\ArrayCollection();
        $this->PaxCategories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ProcessTimes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->PortQueues = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ArchTypes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->FixedPoints = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Port
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set PortType
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\PortType $portType
     * @return Port
     */
    public function setPortType(\BorderForce\Drt\EntityBundle\Entity\PortType $portType = null)
    {
        $this->PortType = $portType;

        return $this;
    }

    /**
     * Get PortType
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\PortType 
     */
    public function getPortType()
    {
        return $this->PortType;
    }

    /**
     * Add PaxSplits
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\PaxSplitClass $paxSplits
     * @return Port
     */
    public function addPaxSplit(\BorderForce\Drt\EntityBundle\Entity\PaxSplitClass $paxSplits)
    {
        $this->PaxSplits[] = $paxSplits;

        return $this;
    }

    /**
     * Remove PaxSplits
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\PaxSplitClass $paxSplits
     */
    public function removePaxSplit(\BorderForce\Drt\EntityBundle\Entity\PaxSplitClass $paxSplits)
    {
        $this->PaxSplits->removeElement($paxSplits);
    }

    /**
     * Get PaxSplits
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPaxSplits()
    {
        return $this->PaxSplits;
    }

    /**
     * Add PaxCategories
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\PaxCategoryClass $paxCategories
     * @return Port
     */
    public function addPaxCategory(\BorderForce\Drt\EntityBundle\Entity\PaxCategoryClass $paxCategories)
    {
        $this->PaxCategories[] = $paxCategories;

        return $this;
    }

    /**
     * Remove PaxCategories
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\PaxCategoryClass $paxCategories
     */
    public function removePaxCategory(\BorderForce\Drt\EntityBundle\Entity\PaxCategoryClass $paxCategories)
    {
        $this->PaxCategories->removeElement($paxCategories);
    }

    /**
     * Get PaxCategories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPaxCategories()
    {
        return $this->PaxCategories;
    }

    /**
     * Add ProcessTimes
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\ProcessTimeClass $processTimes
     * @return Port
     */
    public function addProcessTime(\BorderForce\Drt\EntityBundle\Entity\ProcessTimeClass $processTimes)
    {
        $this->ProcessTimes[] = $processTimes;

        return $this;
    }

    /**
     * Remove ProcessTimes
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\ProcessTimeClass $processTimes
     */
    public function removeProcessTime(\BorderForce\Drt\EntityBundle\Entity\ProcessTimeClass $processTimes)
    {
        $this->ProcessTimes->removeElement($processTimes);
    }

    /**
     * Get ProcessTimes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProcessTimes()
    {
        return $this->ProcessTimes;
    }

    /**
     * Add PortQueues
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\QueueClass $portQueues
     * @return Port
     */
    public function addPortQueue(\BorderForce\Drt\EntityBundle\Entity\QueueClass $portQueues)
    {
        $this->PortQueues[] = $portQueues;

        return $this;
    }

    /**
     * Remove PortQueues
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\QueueClass $portQueues
     */
    public function removePortQueue(\BorderForce\Drt\EntityBundle\Entity\QueueClass $portQueues)
    {
        $this->PortQueues->removeElement($portQueues);
    }

    /**
     * Get PortQueues
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPortQueues()
    {
        return $this->PortQueues;
    }

    /**
     * Add ArchTypes
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\ArchTypeClass $archTypes
     * @return Port
     */
    public function addArchType(\BorderForce\Drt\EntityBundle\Entity\ArchTypeClass $archTypes)
    {
        $this->ArchTypes[] = $archTypes;

        return $this;
    }

    /**
     * Remove ArchTypes
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\ArchTypeClass $archTypes
     */
    public function removeArchType(\BorderForce\Drt\EntityBundle\Entity\ArchTypeClass $archTypes)
    {
        $this->ArchTypes->removeElement($archTypes);
    }

    /**
     * Get ArchTypes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArchTypes()
    {
        return $this->ArchTypes;
    }

    /**
     * Add FixedPoints
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\FixedPoint $fixedPoints
     * @return Port
     */
    public function addFixedPoint(\BorderForce\Drt\EntityBundle\Entity\FixedPoint $fixedPoints)
    {
        $this->FixedPoints[] = $fixedPoints;

        return $this;
    }

    /**
     * Remove FixedPoints
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\FixedPoint $fixedPoints
     */
    public function removeFixedPoint(\BorderForce\Drt\EntityBundle\Entity\FixedPoint $fixedPoints)
    {
        $this->FixedPoints->removeElement($fixedPoints);
    }

    /**
     * Get FixedPoints
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFixedPoints()
    {
        return $this->FixedPoints;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\ArchyTypeClass")
     * @JMS\SerializedName("ArchyTypes")
     */
    private $ArchyTypes;


    /**
     * Add ArchyTypes
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\ArchyTypeClass $archyTypes
     * @return Port
     */
    public function addArchyType(\BorderForce\Drt\EntityBundle\Entity\ArchyTypeClass $archyTypes)
    {
        $this->ArchyTypes[] = $archyTypes;

        return $this;
    }

    /**
     * Remove ArchyTypes
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\ArchyTypeClass $archyTypes
     */
    public function removeArchyType(\BorderForce\Drt\EntityBundle\Entity\ArchyTypeClass $archyTypes)
    {
        $this->ArchyTypes->removeElement($archyTypes);
    }

    /**
     * Get ArchyTypes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArchyTypes()
    {
        return $this->ArchyTypes;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\FixedPointType")
     * @JMS\SerializedName("FixedPointTypes")
     */
    private $FixedPointTypes;


    /**
     * Add FixedPointTypes
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\FixedPointType $fixedPointTypes
     * @return Port
     */
    public function addFixedPointType(\BorderForce\Drt\EntityBundle\Entity\FixedPointType $fixedPointTypes)
    {
        $this->FixedPointTypes[] = $fixedPointTypes;

        return $this;
    }

    /**
     * Remove FixedPointTypes
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\FixedPointType $fixedPointTypes
     */
    public function removeFixedPointType(\BorderForce\Drt\EntityBundle\Entity\FixedPointType $fixedPointTypes)
    {
        $this->FixedPointTypes->removeElement($fixedPointTypes);
    }

    /**
     * Get FixedPointTypes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFixedPointTypes()
    {
        return $this->FixedPointTypes;
    }
}
