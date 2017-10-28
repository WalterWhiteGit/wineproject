<?php
/**
 * Created by PhpStorm.
 * User: samy
 * Date: 28/10/2017
 * Time: 23:51
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class ContactController extends Controller
{

    /**
     * @Route("/contact", name="contact.contact")
     */


    public function contactAction(){



        return $this->render('contact/contact.html.twig');
    }
}