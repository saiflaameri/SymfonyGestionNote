<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant")
 * @ORM\Entity
 */
class Etudiant
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
     * @var int
     *
     * @ORM\Column(name="cin", type="integer", nullable=false)
     */
    private $cin;

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
     * @ORM\Column(name="Classe", type="string", length=30, nullable=false)
     */
    private $classe;
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
   * Get cin
   *
   * @return string
   */
  public function getcin()
  {
      return $this->cin;
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
   * Get classe
   *
   * @return string
   */
  public function getclasse()
  {
      return $this->classe;
  }
   
 
   public function setnom($nom){
       $this->nom=$nom;
   }
   public function setprenom($prenom){
      $this->prenom=$prenom;
  }
  public function setcin($cin){
    $this->cin=$cin;
}
  public function setemail($email){
      $this->email=$email;
  }
  public function setpass($pass){
      $this->pass=$pass;
  }
  public function setclasse($classe){
      $this->classe=$classe;
  }

}
