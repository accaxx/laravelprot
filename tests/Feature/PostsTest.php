<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetPosts()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'id',
                            'title',
                            'body',

                            'comments' => [
                                '*' => [
                                    'id',
                                    'post_id',
                                    'body'
                                ]
                            ]
                        ]
                    ]
                ]);
    }
}
