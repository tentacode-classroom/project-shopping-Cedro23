<?php

namespace App\Controller;

use App\Entity\Balisong;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index($filterType = "", $filterParam = "")
    {
//        switch ($filterType){
//            case "": $balisongs = $this->getDoctrine()->getRepository(Balisong::class)->findAll();
//                        break;
//            case "brand": $balisongs = $this->getDoctrine()->getRepository(Balisong::class)->findByBrand($filterParam);
//                        break;
//            case "model": $balisongs = $this->getDoctrine()->getRepository(Balisong::class)->findByModel($filterParam);
//                         break;
//            case "search": $balisongs = $this->getDoctrine()->getRepository(Balisong::class)->searchByValue($filterParam);
//                        break;
//        }

        $balisongs = $this->getDoctrine()->getRepository(Balisong::class)->findAll();


        return $this->render('homepage.html.twig', [
            'controller_name' => 'HomePageController',
            'products' => $balisongs
        ]);
    }
}
