<?php
namespace App\Http\Controllers;

use Illuminate\Http\Response;


class BaseController extends Controller
{
    protected function __construct()
    {
    }

    /**
     * レスポンスステータス追加
     *
     * @param array $result
     * @return mixed
     */
    protected function getSuccessResponse(array $result = [])
    {
        return response()->json($result, Response::HTTP_OK);
    }
}
