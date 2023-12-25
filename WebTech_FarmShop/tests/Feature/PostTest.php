<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase; // Use this trait to reset the database after each test

    public function testPostRequest(): void
    {
        // Replace 'your_route' with the actual route you want to test
        $response = $this->post(route('login'), [
            'email' => 'test@test',
            'password' => 'kage'

            // Add more data if your request expects additional parameters
        ]);

        $response->assertStatus(302);
        // HTTPS CODE 302 means the logged-in user gets redirected to a new page after login

        $response->assertRedirect(route('home'));


    }
}
