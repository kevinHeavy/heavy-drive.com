<?php

namespace AppBundle\Entity;

/**
 * RentalInvoice
 */
class RentalInvoice
{
    /**
     * @var integer
     */
    private $rentcar;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Fare
     */
    private $rental;


    /**
     * Set rentcar
     *
     * @param integer $rentcar
     *
     * @return RentalInvoice
     */
    public function setRentcar($rentcar)
    {
        $this->rentcar = $rentcar;

        return $this;
    }

    /**
     * Get rentcar
     *
     * @return integer
     */
    public function getRentcar()
    {
        return $this->rentcar;
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
     * Set rental
     *
     * @param \AppBundle\Entity\Fare $rental
     *
     * @return RentalInvoice
     */
    public function setRental(\AppBundle\Entity\Fare $rental = null)
    {
        $this->rental = $rental;

        return $this;
    }

    /**
     * Get rental
     *
     * @return \AppBundle\Entity\Fare
     */
    public function getRental()
    {
        return $this->rental;
    }
}

