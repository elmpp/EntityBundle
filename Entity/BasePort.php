<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * BasePort
 */
class BasePort
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
     * @JMS\SerializedName("code")
     */
    private $code;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("city")
     */
    private $city;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    private $name;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("country")
     */
    private $country;


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
     * Set code
     *
     * @param string $code
     * @return BasePort
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return BasePort
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return BasePort
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
     * Set country
     *
     * @param string $country
     * @return BasePort
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }
}
