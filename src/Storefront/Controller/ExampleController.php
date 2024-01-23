<?php declare(strict_types=1);

namespace Example\Storefront\Controller;

use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route(defaults: ['_routeScope' => ['storefront']])]
class ExampleController extends StorefrontController
{
    #[Route(path: '/esi/example', name: 'frontend.esi.example', defaults: ['_httpCache' => false, '_esi' => true], methods: ['GET'])]
    public function showExample(): Response
    {
        return $this->renderStorefront('@Storefront/storefront/page/example.html.twig', [
            'example' => microtime(true)
        ]);
    }
}
