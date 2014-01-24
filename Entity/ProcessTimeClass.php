<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * ProcessTimeClass
 */
class ProcessTimeClass
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
     * @JMS\SerializedName("processtimename")
     */
    private $processtimename;


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
     * Set processtimename
     *
     * @param string $processtimename
     * @return ProcessTimeClass
     */
    public function setProcesstimename($processtimename)
    {
        $this->processtimename = $processtimename;

        return $this;
    }

    /**
     * Get processtimename
     *
     * @return string 
     */
    public function getProcesstimename()
    {
        return $this->processtimename;
    }
}
