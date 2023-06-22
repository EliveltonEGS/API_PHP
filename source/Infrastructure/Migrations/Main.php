<?php

declare(strict_types=1);

namespace Source\Infrastructure\Migrations;

use Source\Infrastructure\Migrations\Category;

/**
 * Main class
 */
class Main
{
    protected $category;

    public function __construct()
    {
        $this->category = (new Category())->up();
    }
}