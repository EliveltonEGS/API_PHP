<?php

namespace Source\Application\Rest\Product;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use Source\Domain\Repository\Product\ProductORM;
use Source\Domain\Service\ProductService;

class ProductGetIdAction
{
    private $productORM;
    private $productService;

    /**
     * Constructor method
     *
     * @param ContainerInterface $container
     */
    public function __construct(
        private ContainerInterface $container
    )
    {
        $this->productORM = new ProductORM();
        $this->productService = new ProductService($this->productORM);
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return ResponseInterface
     */
    public function __invoke(Request $request, Response $response, array $args): ResponseInterface
    {
        return $response
            ->withStatus(200)
            ->withJson([
                'data' => $this->productService->getId($args['id']),
                'status_code' => 200,
                'message' => 'Find product successfully'
            ]);
    }
}
