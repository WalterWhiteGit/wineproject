<?php
/**
 * User: sammy
 * Date: 28/10/2017
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Contact;
use AppBundle\Form\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



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

     // Submit form

        if ($form->isSubmitted() && $form->isValid() ){

            $data= $form->getData();

            $em->persist($data);

    // Send to BDD
            $em->flush();
            
    //message flash
            $message = "Votre message a bien été transmis";
            
            $this->addFlash('notice',$message);

    // Redirect to homepage
            return $this->redirectToRoute('homepage.accueil');
        }
    
        
    // Return view
        return $this->render('contact/contact.html.twig',['form'=>$createForm]);
    }
}
