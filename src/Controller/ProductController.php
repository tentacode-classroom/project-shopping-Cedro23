<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{number}", name="product")
     */
    public function index($number = 0)
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
            'product_number' => $number
        ]);
    }
}
