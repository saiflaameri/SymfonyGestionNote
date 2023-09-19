<?php

namespace App\Controller;
use App\Form\EtudiantType;
use App\Entity\Etudiant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class EtudiantController extends AbstractController
{
  

    /**
     * 
     * @Route("/Affichetud", name="Afficheetud")
     */

    public function Afficheetud():Response
    {
        $repo=$this->getDoctrine()->getRepository(Etudiant::class );
        $Etudiant=$repo->findAll();
        return $this->render('admin/Etudiantback.html.twig',[
            'etudiant'=>$Etudiant
        ]);
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
     /**
     * 
     * @Route("admin/ajouteretudiant")
     */
    function Add(\Symfony\Component\HttpFoundation\Request $request )
    {
        $Etudiant=new Etudiant();
        $form=$this->createForm(EtudiantType::class,$Etudiant);
        $form->add('Ajouter', SubmitType::class,array(
            'label' => 'Add', 
            'attr'  => array(
                'class' => 'btn btn-success'
          )));
        $form->handleRequest($request); //gerer le requette parcouriir la requet et extraire formation de requette
        if($form->isSubmitted()&& $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($Etudiant);
            $em->flush();
            return $this->redirectToRoute('Afficheetud');
        }
        return $this->render('admin/ajouteretudiant.html.twig',[
            'forme'=>$form->createView()
        ]);
    }
    /**
     * @Route("Updatee/{id}",name="Updatee")
     */
    function Updatee($id ,\Symfony\Component\HttpFoundation\Request $request)
    {
        $Etudiant=$this->getDoctrine()->getRepository(Etudiant::class)->find($id);
      
        $form=$this->createForm(EtudiantType::class,$Etudiant);
        $form->add('update',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("Afficheetud");
    }
    return $this->render('admin/modifieretudiant.html.twig',
    [
        'fe'=>$form->createView()
    ]);
}
}