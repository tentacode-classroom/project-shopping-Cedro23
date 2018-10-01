<?php

namespace App\Controller;

use App\Entity\Balisong;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{id}", name="product")
     */
    public function product($id = 0)
    {
        $balisong = $this->getDoctrine()
            ->getRepository(Balisong::class)
            ->find($id);

        $balisong->incrementViewCounter();

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($balisong);
        $entityManager->flush();

        return $this->render('product/detail.html.twig', [
            'controller_name' => 'ProductController',
            'balisong' => $balisong
        ]);
    }
}
