<?php

namespace App\Http\Controllers;

use App\Services\Post as PostService;
use Illuminate\Http\Request;

class PostController extends BaseController
{
    private $post_service;

    public function __construct(PostService $post_service)
    {
        parent::__construct();
        $this->post_service = $post_service;
    }

    public function index()
    {
        return $this->post_service->getAllPosts();
    }
}
