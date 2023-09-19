<?php

namespace App\Controller;
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class ReclamationetudController extends AbstractController
{
   /**
     * 
     * @Route("/envoyerreclam")
     */
    function Add(\Symfony\Component\HttpFoundation\Request $request )
    {
        $Reclamation=new reclamation();
        $form=$this->createForm(ReclamationType::class,$Reclamation);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request); //gerer le requette parcouriir la requet et extraire formation de requette
        if($form->isSubmitted()&& $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($Reclamation);
            $em->flush();
            return $this->redirectToRoute('Afficheetude');
        }
        return $this->render('espaceetudiant/envoyerreclam.html.twig',[
            'formreclam'=>$form->createView()
        ]);
    }
}
