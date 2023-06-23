<?php

namespace Source\Domain\Repository\Product;

interface ProductRepositoryInterface
{
    /**
     *  Get all products
     *
     * @return array
     */
    public function getAll(): array;

    /**
     *  Find product by id
     *
     * @param integer $id
     * @return array
     */
    public function getId(int $id): array;
}
