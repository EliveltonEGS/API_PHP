<?php

declare(strict_types=1);

namespace Source\Domain\Repository\Category;

use Source\Domain\Model\Category as CategoryModel;
use Source\Application\DTO\{
    CategoryCreateDTO,
    CategoryUpdateDTO
};
use stdClass;

class CategoryORM  implements CategoryRepositoryInterface
{

    /**
     * Get all categories
     *
     * @return array
     */
    public function getAll(): array
    {
        return CategoryModel::all()->toArray();
    }


    /**
     * Find category by id
     *
     * @param integer $id
     * @return array
     */
    public function getId(int $id): array
    {
        $result = CategoryModel::where('id', $id);
        
        if (!$result) {
            return ['message' => 'Category not exists'];
        }

        return $result->get()->toArray();
    }

    /**
     * Create category
     *
     * @param CategoryCreateDTO $categoryDto
     * @return stdClass
     */
    public function create(CategoryCreateDTO $categoryDto): stdClass
    {
        $result = CategoryModel::create((array) $categoryDto);

        return (object) $result->toArray();
    }

    /**
     * Update category
     *
     * @param CategoryUpdateDTO $categoryDto
     * @return stdClass
     */
    public function update(CategoryUpdateDTO $categoryDto): stdClass
    {
        $categoryDto = (array) $categoryDto;
        $result = CategoryModel::where('id', (int) $categoryDto['id'])->first();

        if (!$result) {
            return (object) ['message' => 'Category not exists'];
        }

        $result->update($categoryDto);

        return (object) $categoryDto;
    }
}
