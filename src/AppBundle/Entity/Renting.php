<?php

namespace AppBundle\Entity;

/**
 * Renting
 */
class Renting
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Agency
     */
    private $agency;


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
     * Set agency
     *
     * @param \AppBundle\Entity\Agency $agency
     *
     * @return Renting
     */
    public function setAgency(\AppBundle\Entity\Agency $agency = null)
    {
        $this->agency = $agency;

        return $this;
    }

    /**
     * Get agency
     *
     * @return \AppBundle\Entity\Agency
     */
    public function getAgency()
    {
        return $this->agency;
    }
}

