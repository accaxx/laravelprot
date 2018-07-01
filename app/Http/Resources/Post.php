<?php
namespace App\Http\Resources;

use App\Http\Resources\Comment as CommentResource;
use Illuminate\Http\Resources\Json\Resource;

class Post extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'comments' => CommentResource::collection($this->comments)
        ];
    }
}
