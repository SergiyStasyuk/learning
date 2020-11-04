<?php


namespace App\Repository;


use App\Entity\Category;

interface CategoryRepositoryInterface
{
    /**
     * @return Category[]
     */
    public function getAllCategory(): array;

    /**
     * @param int $categoryId
     * @return Category
     */
    public function getOneCategory(int $categoryId): object;

    /**
     * @param Category $category
     * @return Category
     */
    public function setCreateCategory(Category $category): object;

    /**
     * @param Category $category
     * @return Category
     */
    public function setUpdateCategory(Category $category): object;

    /**
     * @param Category $category
     */
    public function setDeleteCategory(Category $category);
}