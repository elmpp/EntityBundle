<?php

namespace BorderForce\Drt\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Flight
 */
class Flight
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
     * @JMS\SerializedName("flightNumber")
     */
    private $flightNumber;

    /**
     * @var \DateTime
     * @JMS\Type("DateTime")
     * @JMS\SerializedName("scheduledDate")
     */
    private $scheduledDate;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("origin")
     */
    private $origin;

    /**
     * @var \DateTime
     * @JMS\Type("DateTime")
     * @JMS\SerializedName("touchdownEstimated")
     */
    private $touchdownEstimated;

    /**
     * @var \DateTime
     * @JMS\Type("DateTime")
     * @JMS\SerializedName("touchdown")
     */
    private $touchdown;

    /**
     * @var \DateTime
     * @JMS\Type("DateTime")
     * @JMS\SerializedName("choxEstimated")
     */
    private $choxEstimated;

    /**
     * @var \DateTime
     * @JMS\Type("DateTime")
     * @JMS\SerializedName("chox")
     */
    private $chox;

    /**
     * @var integer
     * @JMS\Type("integer")
     * @JMS\SerializedName("passengers")
     */
    private $passengers;

    /**
     * @var \BorderForce\Drt\EntityBundle\Entity\Airline
     * @JMS\Type("BorderForce\Drt\EntityBundle\Entity\Airline")
     * @JMS\SerializedName("airline")
     */
    private $airline;


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
     * Set flightNumber
     *
     * @param string $flightNumber
     * @return Flight
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;

        return $this;
    }

    /**
     * Get flightNumber
     *
     * @return string 
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * Set scheduledDate
     *
     * @param \DateTime $scheduledDate
     * @return Flight
     */
    public function setScheduledDate($scheduledDate)
    {
        $this->scheduledDate = $scheduledDate;

        return $this;
    }

    /**
     * Get scheduledDate
     *
     * @return \DateTime 
     */
    public function getScheduledDate()
    {
        return $this->scheduledDate;
    }

    /**
     * Set origin
     *
     * @param string $origin
     * @return Flight
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get origin
     *
     * @return string 
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set touchdownEstimated
     *
     * @param \DateTime $touchdownEstimated
     * @return Flight
     */
    public function setTouchdownEstimated($touchdownEstimated)
    {
        $this->touchdownEstimated = $touchdownEstimated;

        return $this;
    }

    /**
     * Get touchdownEstimated
     *
     * @return \DateTime 
     */
    public function getTouchdownEstimated()
    {
        return $this->touchdownEstimated;
    }

    /**
     * Set touchdown
     *
     * @param \DateTime $touchdown
     * @return Flight
     */
    public function setTouchdown($touchdown)
    {
        $this->touchdown = $touchdown;

        return $this;
    }

    /**
     * Get touchdown
     *
     * @return \DateTime 
     */
    public function getTouchdown()
    {
        return $this->touchdown;
    }

    /**
     * Set choxEstimated
     *
     * @param \DateTime $choxEstimated
     * @return Flight
     */
    public function setChoxEstimated($choxEstimated)
    {
        $this->choxEstimated = $choxEstimated;

        return $this;
    }

    /**
     * Get choxEstimated
     *
     * @return \DateTime 
     */
    public function getChoxEstimated()
    {
        return $this->choxEstimated;
    }

    /**
     * Set chox
     *
     * @param \DateTime $chox
     * @return Flight
     */
    public function setChox($chox)
    {
        $this->chox = $chox;

        return $this;
    }

    /**
     * Get chox
     *
     * @return \DateTime 
     */
    public function getChox()
    {
        return $this->chox;
    }

    /**
     * Set passengers
     *
     * @param integer $passengers
     * @return Flight
     */
    public function setPassengers($passengers)
    {
        $this->passengers = $passengers;

        return $this;
    }

    /**
     * Get passengers
     *
     * @return integer 
     */
    public function getPassengers()
    {
        return $this->passengers;
    }

    /**
     * Set airline
     *
     * @param \BorderForce\Drt\EntityBundle\Entity\Airline $airline
     * @return Flight
     */
    public function setAirline(\BorderForce\Drt\EntityBundle\Entity\Airline $airline = null)
    {
        $this->airline = $airline;

        return $this;
    }

    /**
     * Get airline
     *
     * @return \BorderForce\Drt\EntityBundle\Entity\Airline 
     */
    public function getAirline()
    {
        return $this->airline;
    }
}
