<?php
namespace App\Services;

use App\Repositories\Comment as CommentRepository;

class Comment extends BaseService
{
    private $comment_repository;

    public function __construct(CommentRepository $comment_repository)
    {
        $this->comment_repository = $comment_repository;
    }

    /**
     * 入力情報からCommentを作成する
     *
     * @param $input
     */
    public function createComment($input)
    {
        $this->comment_repository->createComment($input);
    }
}
