<?php

declare(strict_types=1);

namespace Source\Domain\Service;

use Source\Application\DTO\{CategoryCreateDTO, CategoryUpdateDTO};
use Source\Domain\Repository\Category\CategoryRepositoryInterface;
use stdClass;

class CategoryService  
{
    
    /**
     * Construct method
     * 
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(
        private CategoryRepositoryInterface $categoryRepository
    )
    {
    }

    /**
     * Get all categories
     *
     * @return array
     */
    public function getAll(): array
    {
        return $this->categoryRepository->getAll();
    }

    /**
     * Find category by id
     *
     * @param integer $id
     * @return array
     */
    public function getId(int $id): array
    {
        return $this->categoryRepository->getId($id);
    }

    /**
     * Create category
     *
     * @param CategoryCreateDTO $categoryDto
     * @return Category
     */
    public function create(CategoryCreateDTO $categoryDto): stdClass
    {
        return $this->categoryRepository->create($categoryDto);
    }

    /**
     * Update category
     *
     * @param CategoryUpdateDTO $categoryDto
     * @return stdClass
     */
    public function update(CategoryUpdateDTO $categoryDto): stdClass
    {
        return $this->categoryRepository->update($categoryDto);
    }
}
