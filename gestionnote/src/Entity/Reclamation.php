<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="cin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="classe", type="string", length=30, nullable=false)
     */
    private $classe;

    /**
     * @var string
     *
     * @ORM\Column(name="reclam", type="text", length=255, nullable=false)
     */
    private $reclam;

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
   * Get nom
   *
   * @return string
   */
  public function getnom()
  {
      return $this->nom;
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
   * Get reclam
   *
   * @return string
   */
  public function getreclam()
  {
      return $this->reclam;
  }
  public function setcin($cin){
    $this->cin=$cin;
}
public function setnom($nom){
   $this->nom=$nom;
}
public function setclasse($classe){
   $this->classe=$classe;
}
public function setreclam($reclam){
   $this->reclam=$reclam;
}


}
