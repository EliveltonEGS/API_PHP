<?php

use Slim\Container;
use Slim\App;
use Source\Application\Rest\Category\{
    CategoryGetAllAction,
    CategoryGetIdAction,
    CategoryCreateAction,
    CategoryUpdateAction
};
use Source\Application\Rest\Product\{
    ProductGetAllAction,
    ProductGetIdAction
};

$app = new App();

/** @var Container $container */
$container = $app->getContainer();

//routes categories
$app->get('/category', new CategoryGetAllAction($container));
$app->get('/category/{id}', new CategoryGetIdAction($container));
$app->post('/category', new CategoryCreateAction($container));
$app->put('/category/{id}', new CategoryUpdateAction($container));

//routes products
$app->get('/product', new ProductGetAllAction($container));
$app->get('/product/{id}', new ProductGetIdAction($container));

$app->run();