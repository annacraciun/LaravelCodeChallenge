<?php

namespace Tests\Feature;

use Tests\TestCase;

class JokePageTest extends TestCase
{
    /**
     * Test that the joke page loads and displays at least one joke.
     *
     * @return void
     */
    public function test_joke_page_loads()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Programming Jokes');
        $response->assertSee('Refresh Jokes');

        // Check if at least one joke is displayed
        $response->assertSee('setup');
        $response->assertSee('punchline');
    }
}
