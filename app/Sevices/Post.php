<?php
namespace App\Services;

use App\Http\Resources\Post as PostResource;
use App\Repositories\Post as PostRepository;

class Post extends BaseService
{
    private $post_repository;

    public function __construct(PostRepository $post_repository)
    {
        $this->post_repository = $post_repository;
    }

    /**
     * 全てのPostを取得し成型してJsonで返す
     *
     * @return mixed
     */
    public function getAllPosts()
    {
         return PostResource::collection($this->post_repository->getAllPosts());
    }

    /**
     * IDからPostを取得し成型してJsonで返す
     *
     * @param int $id
     * @return mixed
     */
    public function getPostById(int $id)
    {
        return new PostResource($this->post_repository->getPostById($id));
    }

    /**
     * Postを作成
     *
     * @param $input
     */
    public function createPost($input)
    {
        return $this->post_repository->createPost($input);
    }
}
