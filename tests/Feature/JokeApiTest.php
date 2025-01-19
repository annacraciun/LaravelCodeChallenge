<?php

namespace Tests\Feature;

use Tests\TestCase;

class JokeApiTest extends TestCase
{
    /**
     * Test that the API returns 3 jokes.
     *
     * @return void
     */
    public function test_api_returns_jokes()
    {
        $response = $this->getJson('/api/jokes');

        $response->assertStatus(200);
        $response->assertJsonCount(3);
        $response->assertJsonStructure([
            '*' => ['setup', 'punchline']
        ]);
    }
}
