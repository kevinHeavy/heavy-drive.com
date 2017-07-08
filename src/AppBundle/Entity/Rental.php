<?php

namespace AppBundle\Entity;

/**
 * Rental
 */
class Rental
{
    /**
     * @var integer
     */
    private $pickUpRentingId;

    /**
     * @var integer
     */
    private $dropOffRentingId;

    /**
     * @var integer
     */
    private $clientId;

    /**
     * @var integer
     */
    private $discountId;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set pickUpRentingId
     *
     * @param integer $pickUpRentingId
     *
     * @return Rental
     */
    public function setPickUpRentingId($pickUpRentingId)
    {
        $this->pickUpRentingId = $pickUpRentingId;

        return $this;
    }

    /**
     * Get pickUpRentingId
     *
     * @return integer
     */
    public function getPickUpRentingId()
    {
        return $this->pickUpRentingId;
    }

    /**
     * Set dropOffRentingId
     *
     * @param integer $dropOffRentingId
     *
     * @return Rental
     */
    public function setDropOffRentingId($dropOffRentingId)
    {
        $this->dropOffRentingId = $dropOffRentingId;

        return $this;
    }

    /**
     * Get dropOffRentingId
     *
     * @return integer
     */
    public function getDropOffRentingId()
    {
        return $this->dropOffRentingId;
    }

    /**
     * Set clientId
     *
     * @param integer $clientId
     *
     * @return Rental
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
     * Set discountId
     *
     * @param integer $discountId
     *
     * @return Rental
     */
    public function setDiscountId($discountId)
    {
        $this->discountId = $discountId;

        return $this;
    }

    /**
     * Get discountId
     *
     * @return integer
     */
    public function getDiscountId()
    {
        return $this->discountId;
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

