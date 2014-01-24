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
     * @JMS\SerializedName("queuename")
     */
    private $queuename;

    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("colorcode")
     */
    private $colorcode;

    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("thresholdsla")
     */
    private $thresholdsla;

    /**
     * @var boolean
     * @JMS\Type("boolean")
     * @JMS\SerializedName("staffedqueue")
     */
    private $staffedqueue;


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
     * Set queuename
     *
     * @param string $queuename
     * @return QueueClass
     */
    public function setQueuename($queuename)
    {
        $this->queuename = $queuename;

        return $this;
    }

    /**
     * Get queuename
     *
     * @return string 
     */
    public function getQueuename()
    {
        return $this->queuename;
    }

    /**
     * Set colorcode
     *
     * @param integer $colorcode
     * @return QueueClass
     */
    public function setColorcode($colorcode)
    {
        $this->colorcode = $colorcode;

        return $this;
    }

    /**
     * Get colorcode
     *
     * @return integer 
     */
    public function getColorcode()
    {
        return $this->colorcode;
    }

    /**
     * Set thresholdsla
     *
     * @param integer $thresholdsla
     * @return QueueClass
     */
    public function setThresholdsla($thresholdsla)
    {
        $this->thresholdsla = $thresholdsla;

        return $this;
    }

    /**
     * Get thresholdsla
     *
     * @return integer 
     */
    public function getThresholdsla()
    {
        return $this->thresholdsla;
    }

    /**
     * Set staffedqueue
     *
     * @param boolean $staffedqueue
     * @return QueueClass
     */
    public function setStaffedqueue($staffedqueue)
    {
        $this->staffedqueue = $staffedqueue;

        return $this;
    }

    /**
     * Get staffedqueue
     *
     * @return boolean 
     */
    public function getStaffedqueue()
    {
        return $this->staffedqueue;
    }
}
