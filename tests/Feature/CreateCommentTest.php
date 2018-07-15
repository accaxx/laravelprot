<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateCommentTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreatePosts()
    {

        $response = $this->json('POST', '/comments', [
            'data' => [
                'post_id' => 2,
                'body' => 'comment2',
            ]
        ]);

        $response->assertStatus(200);
    }
}
