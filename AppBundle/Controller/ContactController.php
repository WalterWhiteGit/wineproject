<?php
/**
 * User: sammy
 * Date: 28/10/2017
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class ContactController extends Controller
{

    /**
     * @Route("/contact", name="contact.contact")
     */

    
    public function contactAction(Request $request){


    // Instance Doctrine
    $doctrine =$this->getDoctrine();

    $em = $doctrine->getManager() ;

    // Select Entity
    $entity = new Contact();

    $entityType = ContactType::class;


    // Create Form

    $form = $this->createForm($entityType,$entity);

    $form->handleRequest($request);

    $createForm =$form->createView();



    // Return view
        return $this->render('contact/contact.html.twig',['form'=>$createForm]);
    }
}
