<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{
    #[Route('admin/view/products', name: 'app_product')]
    public function index(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();

        return $this->render('admin/product/index.html.twig', [
            'controller_name' => 'ProductController',
            'products' => $products, // pass products to the template
        ]);
    }
}

