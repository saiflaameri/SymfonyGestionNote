<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity
 */
class Admin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=30, nullable=false)
     */
    private $pass;

    /**
     * Get id
     *
     * @return integer
     */
      
  public function getId()
    {
        return $this->id;
    }
 /*
     * Get nom
     *
     * @return string
     */
    public function getnom()
    {
        return $this->nom;
    }
    /**
     * Get prenom
     *
     * @return string
     */
    public function getprenom()
    {
        return $this->prenom;
    }
      /**
     * Get email
     *
     * @return string
     */
    public function getemail()
    {
        return $this->email;
    }
      /**
     * Get pass
     *
     * @return string
     */
    public function getpass()
    {
        return $this->pass;
    }
     

}
