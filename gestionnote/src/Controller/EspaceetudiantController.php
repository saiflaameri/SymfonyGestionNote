<?php

namespace App\Controller;
use App\Entity\Note;
use App\Form\NoteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EspaceetudiantController extends AbstractController
{
    /**
     * 
     * @Route("/Afficheetude", name="Afficheetude")
     */

    public function Afficheetude():Response
    {
        $repo=$this->getDoctrine()->getRepository(note::class );
        $Note=$repo->findAll();
        return $this->render('espaceetudiant/Etudiantback.html.twig',[
            'note'=>$Note
        ]);
    }
    


}
