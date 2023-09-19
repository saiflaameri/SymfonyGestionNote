<?php

namespace App\Controller;
use App\Entity\Note;
use App\Form\NoteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EnseignantajoutController extends AbstractController
{
 

 
    /**
     * 
     * @Route("/Affichenote", name="Affichenote")
     */

    public function Affichenote():Response
    {
        $repo=$this->getDoctrine()->getRepository(note::class );
        $Note=$repo->findAll();
        return $this->render('enseignantajout/affichernote.html.twig',[
            'note'=>$Note
        ]);
    }

     /**
     * 
     * @Route("enseignantajout/ajouterenote")
     */
    function Add(\Symfony\Component\HttpFoundation\Request $request )
    {
        $Note=new note();
        $form=$this->createForm(NoteType::class,$Note);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request); //gerer le requette parcouriir la requet et extraire formation de requette
        if($form->isSubmitted()&& $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($Note);
            $em->flush();
            return $this->redirectToRoute('Affichenote');
        }
        return $this->render('enseignantajout/ajouternote.html.twig',[
            'formnote'=>$form->createView()
        ]);
    }
    /**
     * @Route("Update/{id}",name="Update")
     */
    function Update($id ,\Symfony\Component\HttpFoundation\Request $request)
    {
        $Note=$this->getDoctrine()->getRepository(note::class)->find($id);
      
        $form=$this->createForm(NoteType::class,$Note);
        $form->add('update',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("Affichenote");
    }
    return $this->render('enseignantajout/modifiernote.html.twig',
    [
        'f'=>$form->createView()
    ]);
}
 
 /**
     * 
     * @Route("/deletenote/{id}" , name="deletenote")
     */

    function Delete($id):Response
    {
        $repo=$this->getDoctrine()->getRepository(note::class );
        $Note=$repo->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Note);
        $em->flush();
        return $this->redirectToRoute('Affichenote');
    }



}
