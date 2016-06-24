<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;


    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\OneToOne(targetEntity="File", cascade={"persist"})
     *
     */
    private $image;


    /**
     * @ORM\OneToMany(targetEntity="Document", orphanRemoval=true, mappedBy="createdBy", cascade={"persist"})
     */
    private $documents;



    public function __construct()
    {
        parent::__construct();
        $this->setEnabled(true);
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    public function getRole()
    {

        foreach($this->getRoles() as $element)
        {
            return $element;
        }

    }

    public  function setRole($role){
        $role = strtoupper($role);

        $this->roles = array();
        if (!in_array($role, $this->roles, true)) {

            $this->roles[] = $role;
        }

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string
     */
    public function getFullname()
    {
        return $this->firstname . ' ' . $this->lastname ;
    }

    /**
     * Set image
     *
     * @param \AppBundle\Entity\File $image
     * @return User
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

    public function setEnabled($boolean)
    {
        if ($boolean == null) $boolean = false;
        $this->enabled = (Boolean) $boolean;

        return $this;
    }


    public function getEnabled()
    {
        return $this->enabled;

    }

    /**
     * Add documents
     *
     * @param \AppBundle\Entity\Document $documents
     * @return User
     */
    public function addDocument(\AppBundle\Entity\Document $documents)
    {
        $this->documents[] = $documents;

        return $this;
    }

    /**
     * Remove documents
     *
     * @param \AppBundle\Entity\Document $documents
     */
    public function removeDocument(\AppBundle\Entity\Document $documents)
    {
        $this->documents->removeElement($documents);
    }

    /**
     * Get documents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocuments()
    {
        return $this->documents;
    }
}
