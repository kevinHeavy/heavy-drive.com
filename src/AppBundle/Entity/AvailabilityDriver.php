<?php

namespace AppBundle\Entity;

/**
 * @ORM\Table(name="availabilityDriver")
 * @ORM\Entity
 */
class AvailabilityDriver
{
    /**
     * @var integer
     */
    protected $id;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

