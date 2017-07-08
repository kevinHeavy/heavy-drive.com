<?php

namespace AppBundle\Entity;

/**
 * Contract
 */
class Contract
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Rental
     */
    private $rental;


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
     * Set rental
     *
     * @param \AppBundle\Entity\Rental $rental
     *
     * @return Contract
     */
    public function setRental(\AppBundle\Entity\Rental $rental = null)
    {
        $this->rental = $rental;

        return $this;
    }

    /**
     * Get rental
     *
     * @return \AppBundle\Entity\Rental
     */
    public function getRental()
    {
        return $this->rental;
    }
}

