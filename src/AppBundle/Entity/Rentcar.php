<?php

namespace AppBundle\Entity;

/**
 * Rentcar
 */
class Rentcar
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Car
     */
    private $car;


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
     * Set car
     *
     * @param \AppBundle\Entity\Car $car
     *
     * @return Rentcar
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

