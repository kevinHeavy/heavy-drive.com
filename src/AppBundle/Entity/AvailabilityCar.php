<?php

namespace AppBundle\Entity;

/**
 * @ORM\Table(name="availabilityCar"), indexes={@ORM\Index(name="FK_773DE69D4D42DB14D", columns={"car_id"}),{@ORM\Index(name="FK_773DE69D4D42DB15D", columns={"reservation_id"})})
 * @ORM\Entity
 */
class AvailabilityCar
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
     * @var \AppBundle\Entity\Reservation
     */
    private $reservation;


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
     * @return AvailabilityCar
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

    /**
     * Set reservation
     *
     * @param \AppBundle\Entity\Reservation $reservation
     *
     * @return AvailabilityCar
     */
    public function setReservation(\AppBundle\Entity\Reservation $reservation = null)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return \AppBundle\Entity\Reservation
     */
    public function getReservation()
    {
        return $this->reservation;
    }
}

