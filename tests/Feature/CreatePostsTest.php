<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreatePostsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreatePosts()
    {

        $response = $this->json('POST', '/posts', [
            'data' => [
                'title' => 'title3',
                'body' => 'body333',
                'show_flag' => 1
            ]
        ]);

        $response->assertStatus(200);
    }
}
