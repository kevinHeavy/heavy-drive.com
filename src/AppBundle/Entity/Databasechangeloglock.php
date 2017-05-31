<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Databasechangeloglock
 *
 * @ORM\Table(name="DATABASECHANGELOGLOCK")
 * @ORM\Entity
 */
class Databasechangeloglock
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LOCKED", type="boolean", nullable=false)
     */
    private $locked;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LOCKGRANTED", type="datetime", nullable=true)
     */
    private $lockgranted;

    /**
     * @var string
     *
     * @ORM\Column(name="LOCKEDBY", type="string", length=255, nullable=true)
     */
    private $lockedby;



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
     * Set locked
     *
     * @param boolean $locked
     *
     * @return Databasechangeloglock
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked
     *
     * @return boolean
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set lockgranted
     *
     * @param \DateTime $lockgranted
     *
     * @return Databasechangeloglock
     */
    public function setLockgranted($lockgranted)
    {
        $this->lockgranted = $lockgranted;

        return $this;
    }

    /**
     * Get lockgranted
     *
     * @return \DateTime
     */
    public function getLockgranted()
    {
        return $this->lockgranted;
    }

    /**
     * Set lockedby
     *
     * @param string $lockedby
     *
     * @return Databasechangeloglock
     */
    public function setLockedby($lockedby)
    {
        $this->lockedby = $lockedby;

        return $this;
    }

    /**
     * Get lockedby
     *
     * @return string
     */
    public function getLockedby()
    {
        return $this->lockedby;
    }
}
