<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DocumentRepository")
 */
class Document
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=400)
     * @Assert\NotBlank(message="Veuillez remplir le champ obligatoire")
     * 
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * @Assert\NotBlank(message="Veuillez remplir le champ obligatoire")
     * 
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date")
     */
    private $createdAt;

    /**
     * @ORM\JoinColumn(name="created_by", referencedColumnName="id")
     * @ORM\ManyToOne(targetEntity="User", inversedBy="documents")
     */
    private $createdBy;

    /**
     * @ORM\Column(name="is_public", type="boolean", nullable=true)
     */
    private $isPublic;


    /**
     * @ORM\OneToOne(targetEntity="File", cascade={"persist"})
     */
    private $image;


    /**
     * @ORM\OneToOne(targetEntity="File", cascade={"persist"})
     */
    private $document;


    /**
     * @ORM\JoinColumn(name="module_id", referencedColumnName="id", nullable=true)
     * @ORM\ManyToOne(targetEntity="Module", inversedBy="document")
     */
    private $module;


    /**
     * @ORM\OneToMany(targetEntity="LogDocument", orphanRemoval=true, mappedBy="document", cascade={"persist"})
     */
    private $logs;


    public function __construct(){
        $this->createdAt = new \DateTime('now');
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

    /**
     * Set title
     *
     * @param string $title
     * @return Document
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Document
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Document
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set isPublic
     *
     * @param boolean $isPublic
     * @return Document
     */
    public function setIsPublic($isPublic)
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    /**
     * Get isPublic
     *
     * @return boolean 
     */
    public function getIsPublic()
    {
        return $this->isPublic;
    }

    /**
     * Set createdBy
     *
     * @param \AppBundle\Entity\User $createdBy
     * @return Document
     */
    public function setCreatedBy(\AppBundle\Entity\User $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \AppBundle\Entity\User 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set image
     *
     * @param \AppBundle\Entity\File $image
     * @return Document
     */
    public function setImage(\AppBundle\Entity\File $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \AppBundle\Entity\File 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set document
     *
     * @param \AppBundle\Entity\File $document
     * @return Document
     */
    public function setDocument(\AppBundle\Entity\File $document = null)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return \AppBundle\Entity\File 
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set module
     *
     * @param \AppBundle\Entity\Module $module
     * @return Document
     */
    public function setModule(\AppBundle\Entity\Module $module = null)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return \AppBundle\Entity\Module 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Add logs
     *
     * @param \AppBundle\Entity\LogDocument $logs
     * @return Document
     */
    public function addLog(\AppBundle\Entity\LogDocument $logs)
    {
        $this->logs[] = $logs;

        return $this;
    }

    /**
     * Remove logs
     *
     * @param \AppBundle\Entity\LogDocument $logs
     */
    public function removeLog(\AppBundle\Entity\LogDocument $logs)
    {
        $this->logs->removeElement($logs);
    }

    /**
     * Get logs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLogs()
    {
        return $this->logs;
    }
}
