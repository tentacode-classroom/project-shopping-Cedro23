<?php

namespace App\Controller;

use App\Repository\BalisongRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product")
     */
    public function product($productId = 0)
    {
        $balisongRepository = new BalisongRepository();
        $balisong = $balisongRepository->findOneById($productId);

        return $this->render('product/detail.html.twig', [
            'controller_name' => 'ProductController',
            'balisong' => $balisong
        ]);
    }
}
