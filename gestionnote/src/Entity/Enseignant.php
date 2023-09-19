<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enseignant
 *
 * @ORM\Table(name="enseignant")
 * @ORM\Entity
 */
class Enseignant
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
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=30, nullable=false)
     */
    private $specialite;


    /**
     * Get id
     *
     * @return integer
     */
      
  public function getId()
    {
        return $this->id;
    }
 
     /** Get nom
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
      /**
     * Get specialite
     *
     * @return string
     */
    public function getspecialite()
    {
        return $this->specialite;
    }
     public function setnom($nom){
         $this->nom=$nom;
     }
     public function setprenom($prenom){
        $this->prenom=$prenom;
    }
    public function setemail($email){
        $this->email=$email;
    }
    public function setpass($pass){
        $this->pass=$pass;
    }
    public function setspecialite($specialite){
        $this->specialite=$specialite;
    }

}
