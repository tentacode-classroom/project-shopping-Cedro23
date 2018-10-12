<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\Balisong;

class BasketController extends AbstractController
{
    /**
     * @Route("/basket", name="basket_list")
     */
    public function index(SessionInterface $session)
    {
        $basketProducts = $session->get('basket_products', []);

        $balisongRepository = $this->getDoctrine()->getRepository(Balisong::class);

        $balisongs = [];

        foreach ($basketProducts as $productId) {
            $balisong = $balisongRepository->find($productId);
            $balisongs[] = $balisong;
        }

        return $this->render('basket/basket.html.twig', [
            'basket_products' => $balisongs,
        ]);
    }

    /**
     * @Route("/basket/add/{productId}", name="basket_add")
     */
    public function add(int $productId, SessionInterface $session)
    {
        $basketProducts = $session->get('basket_products', []);

        if (!in_array($productId, $basketProducts)) {
            $basketProducts[] = $productId;

            $this->addFlash(
                'notice',
                'Produit bien ajouté !'
            );
        }

        $session->set('basket_products', $basketProducts);

        return $this->redirectToRoute('basket_list');
    }


    /**
     * @Route("/basket/remove/{productId}", name="basket_remove")
     */
    public function remove(int $productId, SessionInterface $session)
    {
        $basketProducts = $session->get('basket_products', []);

        $productIndex = array_search($productId, $basketProducts);
        if (false !== $productIndex) {
            unset($basketProducts[$productIndex]);
            $this->addFlash(
                'notice',
                'Produit bien supprimé !'
            );
        }
        $session->set('basket_products', $basketProducts);
        return $this->redirectToRoute('basket_list');
    }
}
