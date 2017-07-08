<?php

namespace AppBundle\Entity;

/**
 * @ORM\Table(name="AdressProof", indexes={@ORM\Index(name="FK_773DE69D4D42DB15D", columns={"reservation_id"})})
 * @ORM\Entity(repositoryClass=heavy-drive.com\src\AppBundle\Entity")
 */
class AdressProof
{
    /**
     * @var integer
     */
    private $id;

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
