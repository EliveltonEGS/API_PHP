<?php

use Slim\Container;
use Slim\App;
use Source\Application\Rest\Category\{
    CategoryGetAllAction,
    CategoryGetIdAction,
    CategoryCreateAction,
    CategoryUpdateAction
};

$app = new App();

/** @var Container $container */
$container = $app->getContainer();

$app->get('/category', new CategoryGetAllAction($container));
$app->get('/category/{id}', new CategoryGetIdAction($container));
$app->post('/category', new CategoryCreateAction($container));
$app->put('/category/{id}', new CategoryUpdateAction($container));

$app->run();

