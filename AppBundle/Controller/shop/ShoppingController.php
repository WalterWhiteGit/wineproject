<?php
/**
 * Created by PhpStorm.
 * User: samy
 * Date: 28/10/2017
 * Time: 22:58
 */

namespace AppBundle\Controller\shop;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShoppingController extends Controller
{

    /**
     *
     * @Route("/Shopping", name="shop.shopping")
     *
     */

   public function shoppingController(){

        $doctrine = $this->getDoctrine();

        $result = $doctrine->getRepository(Products::class)->selectAll();


        //exit(dump($result));

        return $this->render(':Shop:shopping.html.twig',['results'=>$result]);
    }
}
