<?php
namespace App\Repositories;

use App\Models\Post as PostModel;

class Post extends BaseRepository
{
    private $post_model;

    public function __construct(PostModel $post_model)
    {
        $this->post_model = $post_model;
    }

    public function getAllPosts()
    {
        return $this->post_model->all();
    }
}
