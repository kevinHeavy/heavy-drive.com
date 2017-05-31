<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Databasechangelog
 *
 * @ORM\Table(name="DATABASECHANGELOG")
 * @ORM\Entity
 */
class Databasechangelog
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="AUTHOR", type="string", length=255, nullable=false)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="FILENAME", type="string", length=255, nullable=false)
     */
    private $filename;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEEXECUTED", type="datetime", nullable=false)
     */
    private $dateexecuted;

    /**
     * @var integer
     *
     * @ORM\Column(name="ORDEREXECUTED", type="integer", nullable=false)
     */
    private $orderexecuted;

    /**
     * @var string
     *
     * @ORM\Column(name="EXECTYPE", type="string", length=10, nullable=false)
     */
    private $exectype;

    /**
     * @var string
     *
     * @ORM\Column(name="MD5SUM", type="string", length=35, nullable=true)
     */
    private $md5sum;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTS", type="string", length=255, nullable=true)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="TAG", type="string", length=255, nullable=true)
     */
    private $tag;

    /**
     * @var string
     *
     * @ORM\Column(name="LIQUIBASE", type="string", length=20, nullable=true)
     */
    private $liquibase;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTEXTS", type="string", length=255, nullable=true)
     */
    private $contexts;

    /**
     * @var string
     *
     * @ORM\Column(name="LABELS", type="string", length=255, nullable=true)
     */
    private $labels;

    /**
     * @var string
     *
     * @ORM\Column(name="DEPLOYMENT_ID", type="string", length=10, nullable=true)
     */
    private $deploymentId;



    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Databasechangelog
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return Databasechangelog
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set dateexecuted
     *
     * @param \DateTime $dateexecuted
     *
     * @return Databasechangelog
     */
    public function setDateexecuted($dateexecuted)
    {
        $this->dateexecuted = $dateexecuted;

        return $this;
    }

    /**
     * Get dateexecuted
     *
     * @return \DateTime
     */
    public function getDateexecuted()
    {
        return $this->dateexecuted;
    }

    /**
     * Set orderexecuted
     *
     * @param integer $orderexecuted
     *
     * @return Databasechangelog
     */
    public function setOrderexecuted($orderexecuted)
    {
        $this->orderexecuted = $orderexecuted;

        return $this;
    }

    /**
     * Get orderexecuted
     *
     * @return integer
     */
    public function getOrderexecuted()
    {
        return $this->orderexecuted;
    }

    /**
     * Set exectype
     *
     * @param string $exectype
     *
     * @return Databasechangelog
     */
    public function setExectype($exectype)
    {
        $this->exectype = $exectype;

        return $this;
    }

    /**
     * Get exectype
     *
     * @return string
     */
    public function getExectype()
    {
        return $this->exectype;
    }

    /**
     * Set md5sum
     *
     * @param string $md5sum
     *
     * @return Databasechangelog
     */
    public function setMd5sum($md5sum)
    {
        $this->md5sum = $md5sum;

        return $this;
    }

    /**
     * Get md5sum
     *
     * @return string
     */
    public function getMd5sum()
    {
        return $this->md5sum;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Databasechangelog
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Databasechangelog
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return Databasechangelog
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set liquibase
     *
     * @param string $liquibase
     *
     * @return Databasechangelog
     */
    public function setLiquibase($liquibase)
    {
        $this->liquibase = $liquibase;

        return $this;
    }

    /**
     * Get liquibase
     *
     * @return string
     */
    public function getLiquibase()
    {
        return $this->liquibase;
    }

    /**
     * Set contexts
     *
     * @param string $contexts
     *
     * @return Databasechangelog
     */
    public function setContexts($contexts)
    {
        $this->contexts = $contexts;

        return $this;
    }

    /**
     * Get contexts
     *
     * @return string
     */
    public function getContexts()
    {
        return $this->contexts;
    }

    /**
     * Set labels
     *
     * @param string $labels
     *
     * @return Databasechangelog
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Get labels
     *
     * @return string
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Set deploymentId
     *
     * @param string $deploymentId
     *
     * @return Databasechangelog
     */
    public function setDeploymentId($deploymentId)
    {
        $this->deploymentId = $deploymentId;

        return $this;
    }

    /**
     * Get deploymentId
     *
     * @return string
     */
    public function getDeploymentId()
    {
        return $this->deploymentId;
    }
}
