<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Form\AdminType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class AdminController extends AbstractController
{
    /**
     * 
     * @Route("/Afficheadmin", name="Afficheadmin")
     */
    
    public function Afficheadmin():Response
    {
        $repo=$this->getDoctrine()->getRepository(admin::class );
        $Admin=$repo->findAll();
        return $this->render('admin/admin.html.twig',[
            'admin'=>$Admin
        ]);
    }
    /**
     * 
     * @Route("/deleteadmin/{id}" , name="deleteadmin")
     */

    function Delete($id):Response
    {
        $repo=$this->getDoctrine()->getRepository(admin::class );
        $Admin=$repo->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Admin);
        $em->flush();
        return $this->redirectToRoute('Afficheadmin');
    }

    /**
     * 
     * @Route("admin/ajouteradmin")
     */
    function Add(\Symfony\Component\HttpFoundation\Request $request )
    {
        $Admin=new admin();
        $form=$this->createForm(AdminType::class,$Admin);
        $form->add('Ajouter', SubmitType::class, array(
            'label' => 'Ajouter', 
            'attr'  => array(
                'class' => 'btn btn-danger'
          )));
        $form->handleRequest($request); //gerer le requette parcouriir la requet et extraire formation de requette
        if($form->isSubmitted()&& $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($Admin);
            $em->flush();
            return $this->redirectToRoute('Afficheadmin');
        }
        return $this->render('admin/ajouteradmin.html.twig',[
            'forma'=>$form->createView()
        ]);
    }
    /**
     * @Route("Updatea/{id}",name="Updatea")
     */
    function Updatea($id ,\Symfony\Component\HttpFoundation\Request $request)
    {
        $Admin=$this->getDoctrine()->getRepository(admin::class)->find($id);
      
        $form=$this->createForm(AdminType::class,$Admin);
        $form->add('update',SubmitType::class,array(
            'label' => 'Update', 
            'attr'  => array(
                'class' => 'btn btn-danger'
          )));
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("Afficheadmin");
    }
    return $this->render('admin/modifieradmin.html.twig',
    [
        'fa'=>$form->createView()
    ]);
}

}
