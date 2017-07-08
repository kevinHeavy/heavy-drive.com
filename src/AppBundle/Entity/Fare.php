<?php

namespace AppBundle\Entity;

/**
 * Fare
 */
class Fare
{
    /**
     * @var string
     */
    protected $amount;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \AppBundle\Entity\Rental
     */
    protected $rental;


    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return Fare
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
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
     * @param \AppBundle\Entity\Rental $rental
     *
     * @return Fare
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

