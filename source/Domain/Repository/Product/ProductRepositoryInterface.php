<?php

namespace Source\Domain\Repository\Product;

interface ProductRepositoryInterface
{
    /**
     * Get all products
     *
     * @return array
     */
    public function getAll(): array;
}
