<?php

namespace Source\Domain\Repository\Product;

use Source\Domain\Model\Product;

class ProductORM implements ProductRepositoryInterface
{
    /**
     * Get all products
     *
     * @return array
     */
    public function getAll(): array
    {
        return Product::with('category')->get()->toArray();
    }

    /**
     * Find product by id
     *
     * @param integer $id
     * @return array
     */
    public function getId(int $id): array
    {
        return Product::with('category')->find($id)->toArray();
    }
}
