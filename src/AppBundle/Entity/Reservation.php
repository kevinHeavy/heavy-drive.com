<?php

namespace AppBundle\Entity;

/**
 * Reservation
 */
class Reservation
{
    /**
     * @var integer
     */
    private $pickUpLocationId;

    /**
     * @var integer
     */
    private $dropOffLocationId;

    /**
     * @var integer
     */
    private $clientId;

    /**
     * @var integer
     */
    private $identitycardId;

    /**
     * @var integer
     */
    private $adrId;

    /**
     * @var integer
     */
    private $licId;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set pickUpLocationId
     *
     * @param integer $pickUpLocationId
     *
     * @return Reservation
     */
    public function setPickUpLocationId($pickUpLocationId)
    {
        $this->pickUpLocationId = $pickUpLocationId;

        return $this;
    }

    /**
     * Get pickUpLocationId
     *
     * @return integer
     */
    public function getPickUpLocationId()
    {
        return $this->pickUpLocationId;
    }

    /**
     * Set dropOffLocationId
     *
     * @param integer $dropOffLocationId
     *
     * @return Reservation
     */
    public function setDropOffLocationId($dropOffLocationId)
    {
        $this->dropOffLocationId = $dropOffLocationId;

        return $this;
    }

    /**
     * Get dropOffLocationId
     *
     * @return integer
     */
    public function getDropOffLocationId()
    {
        return $this->dropOffLocationId;
    }

    /**
     * Set clientId
     *
     * @param integer $clientId
     *
     * @return Reservation
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return integer
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set identitycardId
     *
     * @param integer $identitycardId
     *
     * @return Reservation
     */
    public function setIdentitycardId($identitycardId)
    {
        $this->identitycardId = $identitycardId;

        return $this;
    }

    /**
     * Get identitycardId
     *
     * @return integer
     */
    public function getIdentitycardId()
    {
        return $this->identitycardId;
    }

    /**
     * Set adrId
     *
     * @param integer $adrId
     *
     * @return Reservation
     */
    public function setAdrId($adrId)
    {
        $this->adrId = $adrId;

        return $this;
    }

    /**
     * Get adrId
     *
     * @return integer
     */
    public function getAdrId()
    {
        return $this->adrId;
    }

    /**
     * Set licId
     *
     * @param integer $licId
     *
     * @return Reservation
     */
    public function setLicId($licId)
    {
        $this->licId = $licId;

        return $this;
    }

    /**
     * Get licId
     *
     * @return integer
     */
    public function getLicId()
    {
        return $this->licId;
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
}

