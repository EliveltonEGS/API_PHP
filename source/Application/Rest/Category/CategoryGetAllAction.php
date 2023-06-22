<?php

declare(strict_types=1);

namespace Source\Application\Rest\Category;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use Source\Domain\Repository\Category\CategoryORM;
use Source\Domain\Service\CategoryService;

class CategoryGetAllAction
{

    private $categoryORM;
    private $categoryService;

    /**
     * Constructor method
     *
     * @param ContainerInterface $container
     */
    public function __construct(
        private ContainerInterface $container
    )
    {
        $this->categoryORM = new CategoryORM();
        $this->categoryService = new CategoryService($this->categoryORM);
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
                'data' => $this->categoryService->getAll(),
                'status_code' => 200,
                'message' => 'Get all categories'
            ]);
    }
}
