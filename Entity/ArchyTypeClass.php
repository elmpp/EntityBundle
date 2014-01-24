<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * ArchyTypeClass
 */
class ArchyTypeClass
{
    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("id")
     */
    private $id;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    private $name;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\ArchyTypePriority
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\ArchyTypePriority")
     * @JMS\SerializedName("PriorityType")
     */
    private $PriorityType;


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
     * Set name
     *
     * @param string $name
     * @return ArchyTypeClass
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set PriorityType
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\ArchyTypePriority $priorityType
     * @return ArchyTypeClass
     */
    public function setPriorityType(\BorderForce\Drt\EntityBundle\Entity\ArchyTypePriority $priorityType = null)
    {
        $this->PriorityType = $priorityType;

        return $this;
    }

    /**
     * Get PriorityType
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\ArchyTypePriority 
     */
    public function getPriorityType()
    {
        return $this->PriorityType;
    }
}
