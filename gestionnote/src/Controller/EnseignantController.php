<?php

namespace App\Controller;

use App\Entity\Enseignant;
use App\Form\EnseignantType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class EnseignantController extends AbstractController
{
  
    /**
     * 
     * @Route("/Afficheprof", name="Afficheprof")
     */

    public function Afficheprof():Response
    {
        $repo=$this->getDoctrine()->getRepository(Enseignant::class );
        $Enseignant=$repo->findAll();
        return $this->render('admin/Enseignantback.html.twig',[
            'enseignant'=>$Enseignant
        ]);
    }
    /**
     * 
     * @Route("/deletenseignant/{id}" , name="deletenseignant")
     */

    function Delete($id):Response
    {
        $repo=$this->getDoctrine()->getRepository(Enseignant::class );
        $Enseignant=$repo->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Enseignant);
        $em->flush();
        return $this->redirectToRoute('Afficheprof');
    }

    /**
     * 
     * @Route("admin/ajouterenseignant")
     */
    function Add(\Symfony\Component\HttpFoundation\Request $request )
    {
        $Enseignant=new Enseignant();
        $form=$this->createForm(EnseignantType::class,$Enseignant);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request); //gerer le requette parcouriir la requet et extraire formation de requette
        if($form->isSubmitted()&& $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($Enseignant);
            $em->flush();
            return $this->redirectToRoute('Afficheprof');
        }
        return $this->render('admin/ajouterenseignant.html.twig',[
            'form'=>$form->createView()
        ]);
    }
    /**
     * @Route("/Updateens/{id}",name="Updateens")
     */
    function Updateens($id ,\Symfony\Component\HttpFoundation\Request $request)
    {
        $Enseignant=$this->getDoctrine()->getRepository(Enseignant::class)->find($id);
      
        $form=$this->createForm(EnseignantType::class,$Enseignant);
        $form->add('update',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("Afficheprof");
    }
    return $this->render('admin/modifierEnseignant.html.twig',
    [
        'f'=>$form->createView()
    ]);
}

}