<?php
namespace App\Repositories;

use App\Models\Comment as CommentModel;

class Comment extends BaseRepository
{
    private $comment_model;

    public function __construct(CommentModel $comment_model)
    {
        $this->comment_model = $comment_model;
    }

    /**
     * 入力情報からCommentを作成する
     *
     * @param $input
     */
    public function createComment($input)
    {
        $this->comment_model->create($input);
    }
}
