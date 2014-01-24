<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * QueueClass
 */
class QueueClass
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
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("color")
     */
    private $color;

    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("sla")
     */
    private $sla;

    /**
     * @var boolean
     * @JMS\Type("boolean")
     * @JMS\SerializedName("manned")
     */
    private $manned;


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
     * @return QueueClass
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
     * Set color
     *
     * @param integer $color
     * @return QueueClass
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return integer 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set sla
     *
     * @param integer $sla
     * @return QueueClass
     */
    public function setSla($sla)
    {
        $this->sla = $sla;

        return $this;
    }

    /**
     * Get sla
     *
     * @return integer 
     */
    public function getSla()
    {
        return $this->sla;
    }

    /**
     * Set manned
     *
     * @param boolean $manned
     * @return QueueClass
     */
    public function setManned($manned)
    {
        $this->manned = $manned;

        return $this;
    }

    /**
     * Get manned
     *
     * @return boolean 
     */
    public function getManned()
    {
        return $this->manned;
    }
}
