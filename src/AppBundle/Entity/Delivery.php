<?php

namespace AppBundle\Entity;

/**
 * @ORM\Table(name="delivery"), indexes={@ORM\Index(name="FK_773DE69D4D42DB19D", columns={"reservation_id"})
 * @ORM\Entity
 */
class Delivery
{
    /**
     * @var integer
     */
    private $id;

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
     * Set reservation
     *
     * @param \AppBundle\Entity\Reservation $reservation
     *
     * @return Delivery
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

