<?php

declare(strict_types=1);

namespace Source\Domain\Repository\Category;

use Source\Application\DTO\{CategoryCreateDTO, CategoryUpdateDTO};
use stdClass;

interface CategoryRepositoryInterface
{
    
    /**
     * Get all categories
     *
     * @return array
     */
    public function getAll(): array;

    /**
     * Find category by id
     *
     * @param integer $id
     * @return array
     */
    public function getId(int $id): array;

    /**
     * Create category
     *
     * @param CategoryCreateDTO $categoryDto
     * @return stdClass
     */
    public function create(CategoryCreateDTO $categoryDto): stdClass;

    /**
     * Update category
     *
     * @param CategoryUpdateDTO $categoryDto
     * @return stdClass
     */
    public function update(CategoryUpdateDTO $categoryDto): stdClass;
}