<?php

namespace App\Http\Controllers;

use App\Services\Comment as CommentService;
use Illuminate\Http\Request;

class CommentController extends BaseController
{
    private $comment_service;

    public function __construct(CommentService $comment_service)
    {
        $this->comment_service = $comment_service;
    }

    /**
     * 入力情報からCommentを作成する
     *
     * @param Request $request
     */
    public function create(Request $request)
    {
        return $this->comment_service->createComment($request->data);
    }
}
