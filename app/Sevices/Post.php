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
    public function getAllPosts(?array $query)
    {
        // クエリパラメータの指定がなければ全てのPostを返す
        if (is_null($query)) {
            return PostResource::collection($this->post_repository->getAll());
        }
        return PostResource::collection($this->post_repository->getAllByQuery($query));
    }

    /**
     * IDからPostを取得し成型してJsonで返す
     *
     * @param int $id
     * @return mixed
     */
    public function getPostById(int $id)
    {
        return new PostResource($this->post_repository->getById($id));
    }

    /**
     * Postを作成
     *
     * @param $input
     * @return mixed
     */
    public function createPost($input)
    {
        return $this->post_repository->create($input);
    }
}
