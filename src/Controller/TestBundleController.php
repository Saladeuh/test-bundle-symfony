<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestBundleController extends AbstractController
{
    #[Route('/test/bundle', name: 'test_bundle_test_bundle')]
    public function index(): Response
    {
        return $this->render('test_bundle/index.html.twig', [
            'controller_name' => 'TestBundleController',
        ]);
    }
}
