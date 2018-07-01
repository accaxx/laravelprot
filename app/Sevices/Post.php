<?php
namespace App\Services;

use App\Repositories\Post as PostRepository;

class Post extends BaseService
{
    private $post_repository;

    public function __construct(PostRepository $post_repository)
    {
        $this->post_repository = $post_repository;
    }

    public function getAllPosts()
    {
        return $this->post_repository->getAllPosts();
    }
}
