<?php

namespace App\Services\Categories;

use App\Repositories\Interfaces\ICategoryRepository;

class FindAllService
{
    private ICategoryRepository $category_repository;

    public function __construct(
        ICategoryRepository $category_repository
    )
    {
        $this->category_repository = $category_repository;
    }

    public function execute(): array
    {
        $categories = $this->category_repository->findAll();
        return $categories->toArray();
    }
}
