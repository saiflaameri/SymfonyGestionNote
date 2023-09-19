<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    
    /**
     * @Route("/", name="app_home")
     */
    public function home(): Response
    {
        return $this->render('home/home.html.twig', [
            'controller_home' => 'HomeController',
        ]);
    }
   
    /**
     * @Route("/Enseignant",name="app_enseignant")
     */
    public function Enseignant():Response
    {
        return $this->render('home/Enseignant.html.twig',[
            'controller_Espace_Enseignant'=>'enseignantcontroller'
        ]);
       
    }
      /**
     * @Route("/Etudiant",name="app_etudiant")
     */
    public function Etudiant():Response
    {
        return $this->render('home/Etudiant.html.twig',[
            'controller_Etudiant'=>'etudiantcontroller'
        ]);
       
    }
    
      /**
     * @Route("/Admin",name="app_admin")
     */
    public function Admin():Response
    {
        return $this->render('home/Admin.html.twig',[
            'controller_Admin'=>'Admincontroller'
        ]);
       
    }

}
