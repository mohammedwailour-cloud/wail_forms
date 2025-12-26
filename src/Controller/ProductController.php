<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\Type\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/product')]
    public function index(): Response
    {
        $form = $this->createForm(ProductType::class);
        $data = null;

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération des données
            $data = $form->getData();
        }

        return $this->render('product/index.html.twig', [
            'product' => $form->createView(),
            'data' => $data,
        ]);
    }

}
