<?php

namespace AppBundle\Entity;

/**
 * Discount
 */
class Discount
{
    /**
     * @var string
     */
    private $pourcentageDiscount;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set pourcentageDiscount
     *
     * @param string $pourcentageDiscount
     *
     * @return Discount
     */
    public function setPourcentageDiscount($pourcentageDiscount)
    {
        $this->pourcentageDiscount = $pourcentageDiscount;

        return $this;
    }

    /**
     * Get pourcentageDiscount
     *
     * @return string
     */
    public function getPourcentageDiscount()
    {
        return $this->pourcentageDiscount;
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

