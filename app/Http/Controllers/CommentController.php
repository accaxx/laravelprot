<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends BaseController
{
    private $comment_repository;

    public function __construct()
    {
    }
}
