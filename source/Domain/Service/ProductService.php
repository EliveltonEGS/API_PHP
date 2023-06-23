<?php

namespace Source\Domain\Service;

use Source\Domain\Repository\Product\ProductRepositoryInterface;

class ProductService
{
    /**
     * Construct method
     * 
     * @param ProductRepositoryInterfaceace $productRepository
     */
    public function __construct(
        private ProductRepositoryInterface $productRepository
    )
    {
    }

    /**
     * Get all products
     *
     * @return array
     */
    public function getAll(): array
    {
        return $this->productRepository->getAll();
    }
}
