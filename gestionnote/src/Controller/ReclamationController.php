<?php

namespace App\Controller;
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationController extends AbstractController
{
  
    /**
     * 
     * @Route("/Affichereclam", name="Affichereclam")
     */
    
    public function Affichereclam():Response
    {
        $repo=$this->getDoctrine()->getRepository(reclamation::class );
        $reclam=$repo->findAll();
        return $this->render('admin/reclamation.html.twig',[
            'reclamation'=>$reclam
        ]);
    }
     /**
     * 
     * @Route("/deletereclam/{cin}" , name="deletereclam")
     */

    function deletereclam($cin):Response
    {
        $repo=$this->getDoctrine()->getRepository(Reclamation::class );
        $reclam=$repo->find($cin);
        $em=$this->getDoctrine()->getManager();
        $em->remove($reclam);
        $em->flush();
        return $this->redirectToRoute('Affichereclam');
    }
}
/**
 * 
 * @Route("/deletetudiant/{id}" , name="deletetudiant")
 */ 

function Delete($id):Response
{
    $repo=$this->getDoctrine()->getRepository(Etudiant::class );
    $Etudiant=$repo->find($id);
    $em=$this->getDoctrine()->getManager();
    $em->remove($Etudiant);
    $em->flush();
    return $this->redirectToRoute('Affichetude');


}
