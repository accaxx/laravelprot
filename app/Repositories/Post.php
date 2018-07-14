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

    /**
     * フラグがonのPostをすべて取得する
     *
     * @return mixed
     */
    public function getAllPosts()
    {
        return $this->post_model
            ->where('show_flag', FLAG_ON)
            ->get();
    }

    /**
     * 指定IDのPostを取得する
     *
     * @param int $id
     * @return mixed
     */
    public function getPostById(int $id)
    {
        return $this->post_model->findOrFail($id);
    }

    /**
     * 入力からPostを作成する
     *
     * @param $input
     * @return mixed
     */
    public function createPost($input)
    {
        return $this->post_model->create($input);
    }
}
