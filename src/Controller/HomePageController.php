<?php

namespace App\Controller;

use App\Repository\BalisongRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $balisongRepository = new BalisongRepository();
        $balisongs = $balisongRepository->findAll();

        return $this->render('homepage.html.twig', [
            'controller_name' => 'HomePageController',
            'products' => $balisongs
        ]);
    }
}
