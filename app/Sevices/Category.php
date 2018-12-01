<?php
namespace App\Services;

use App\Repositories\Category as CategoryRepository;
use App\Http\Resources\Category as CategoryResource;

class Category extends BaseService
{
    private $category_repository;

    public function __construct(CategoryRepository $category_repository)
    {
        $this->category_repository = $category_repository;
    }

    /**
     * 全てのCategoryを取得し成型してJsonで返す
     *
     * @return mixed
     */
    public function getAll()
    {
         return CategoryResource::collection($this->category_repository->getAll());
    }
}
