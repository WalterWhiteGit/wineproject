<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomePageController extends Controller
{
    /**
     * @Route("/", name="homepage.accueil")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('homepage/accueil.html.twig', []);
    }
}
