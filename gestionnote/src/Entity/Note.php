<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity
 */
class Note
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
     * @ORM\Column(name="prenom", type="string", length=25, nullable=false)
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
     * @ORM\Column(name="Classe", type="string", length=35, nullable=false)
     */
    private $classe;

    /**
     * @var int
     *
     * @ORM\Column(name="notetp", type="integer", nullable=false)
     */
    private $notetp;

    /**
     * @var int
     *
     * @ORM\Column(name="noteds", type="integer", nullable=false)
     */
    private $noteds;

    /**
     * @var int
     *
     * @ORM\Column(name="noteexame", type="integer", nullable=false)
     */
    private $noteexame;

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
     * @return int
     */
    public function getcin()
    {
        return $this->cin;
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
  
    /**
   * Get notetp
   *
   * @return string
   */
  public function getnotetp()
  {
      return $this->notetp;
  }

  
    /**
   * Get noteds
   *
   * @return int
   */
  public function getnoteds()
  {
      return $this->noteds;
  }

  /**
   * Get noteexame
   *
   * @return int
   */
  public function getnoteexame()
  {
      return $this->noteexame;
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
public function setclasse($classe){
    $this->classe=$classe;
}

public function setnotetp($notetp){
    $this->notetp=$notetp;
   }
   public function setnoteds($noteds){
    $this->noteds=$noteds;
   }
   public function setnoteexame($noteexame){
    $this->noteexame=$noteexame;
   }

}
