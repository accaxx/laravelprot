<?php
namespace App\Repositories;

use App\Models\Category as CategoryModel;

class Category extends BaseRepository
{
    private $category_model;

    public function __construct(CategoryModel $category_model)
    {
        $this->category_model = $category_model;
    }

    /**
     * Categoryをすべて取得する
     *
     * @return mixed
     */
    public function getAll()
    {
        return $this->category_model
            ->all();
    }
}
