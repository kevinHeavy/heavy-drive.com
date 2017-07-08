<?php

namespace AppBundle\Entity;

/**
 * Calendar
 */
class Calendar
{
    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\AvailabilityCar
     */
    private $availability;

    /**
     * @var \AppBundle\Entity\Car
     */
    private $car;


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Calendar
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

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
     * Set availability
     *
     * @param \AppBundle\Entity\AvailabilityCar $availability
     *
     * @return Calendar
     */
    public function setAvailability(\AppBundle\Entity\AvailabilityCar $availability = null)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Get availability
     *
     * @return \AppBundle\Entity\AvailabilityCar
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set car
     *
     * @param \AppBundle\Entity\Car $car
     *
     * @return Calendar
     */
    public function setCar(\AppBundle\Entity\Car $car = null)
    {
        $this->car = $car;

        return $this;
    }

    /**
     * Get car
     *
     * @return \AppBundle\Entity\Car
     */
    public function getCar()
    {
        return $this->car;
    }
}

