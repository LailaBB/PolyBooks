<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogDocument
 *
 * @ORM\Table(name="log_document")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LogDocumentRepository")
 */
class LogDocument
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateChange", type="datetime")
     */
    private $dateChange;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=255)
     */
    private $action;

    /**
     * @ORM\JoinColumn(name="document_id", referencedColumnName="id")
     * @ORM\ManyToOne(targetEntity="Document", inversedBy="logs")
     */
    private $document;

    /**
     * @ORM\JoinColumn(name="changed_by", referencedColumnName="id")
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $changedBy;


    public function __construct($document, $changedBy , $action){
        $this->document = $document;
        $this->dateChange = new \DateTime('now');
        $this->changedBy = $changedBy;
        $this->action = $action;
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
     * Set dateChange
     *
     * @param \DateTime $dateChange
     * @return LogDocument
     */
    public function setDateChange($dateChange)
    {
        $this->dateChange = $dateChange;

        return $this;
    }

    /**
     * Get dateChange
     *
     * @return \DateTime 
     */
    public function getDateChange()
    {
        return $this->dateChange;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return LogDocument
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set document
     *
     * @param \AppBundle\Entity\Document $document
     * @return LogDocument
     */
    public function setDocument(\AppBundle\Entity\Document $document = null)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return \AppBundle\Entity\Document 
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set changedBy
     *
     * @param \AppBundle\Entity\User $changedBy
     * @return LogDocument
     */
    public function setChangedBy(\AppBundle\Entity\User $changedBy = null)
    {
        $this->changedBy = $changedBy;

        return $this;
    }

    /**
     * Get changedBy
     *
     * @return \AppBundle\Entity\User 
     */
    public function getChangedBy()
    {
        return $this->changedBy;
    }
}
