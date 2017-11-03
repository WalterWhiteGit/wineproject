<?php
/**
 * Created by PhpStorm.
 * User: samy
 * Date: 28/10/2017
 * Time: 22:58
 */

namespace AppBundle\Controller\shop;



use AppBundle\Entity\Products;
use AppBundle\Form\ProductsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

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

        $em = $doctrine->getManager();

        // Select Entity

        $entity = new Products();

        $entityType = ProductsType::class;

        // Create Form

        $form = $this->createForm($entityType,$entity);

        $createform = $form->createView();

        //exit(dump($result));

        return $this->render(':Shop:shopping.html.twig',['results'=>$result, 'form'=>$createform]);
    }


    /**
     * @Route("/ajax", name="shop.shopping.ajax")
     *
     */


    public function ajaxAction(Request $request)
    {
        $name =$request->request->get('data');



        $get= $this->getDoctrine();

        $results = $get->getRepository(Products::class)->searchProducts($name);



        //Retour ce fait en JSON

        return new JsonResponse($results);

    }


}
