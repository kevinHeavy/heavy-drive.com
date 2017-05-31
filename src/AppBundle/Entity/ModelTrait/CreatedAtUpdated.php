<?php
/**
 * Created by PhpStorm.
 * User: ashley
 * Date: 30/05/17
 * Time: 22:15
 */

namespace AppBundle\Entity\ModelTrait;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class CreatedAtUpdatedAt.
 *
 * @ORM\HasLifecycleCallbacks
 */
trait CreatedAtUpdatedAt
{
    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    private $createdAt;
    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;
    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
    }
    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }
    /**
     * @ORM\PrePersist
     */
    public function _timestampable_prePersist()
    {
        $this->createdAt = new \DateTime();
    }
    /**
     * @ORM\PreUpdate
     */
    public function _timestampable_preUpdate()
    {
        $this->updatedAt = new \DateTime();
    }



}