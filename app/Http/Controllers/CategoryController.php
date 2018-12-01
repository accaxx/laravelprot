<?php
namespace App\Http\Controllers;

use App\Services\Category as CategoryService;

class CategoryController extends BaseController
{
    private $category_service;

    public function __construct(CategoryService $category_service)
    {
        parent::__construct();
        $this->category_service = $category_service;
    }

    /**
     * Category一覧を表示
     *
     * @return mixed
     */
    public function index()
    {
        return $this->category_service->getAll();
    }
}
