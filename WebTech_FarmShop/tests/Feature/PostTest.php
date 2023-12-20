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
        $response = $this->post(route('register'), [
            'id' => '36',
            'name' => 'mads', // Replace with your actual request data
            'email' => 'test1234@test.dk'

            // Add more data if your request expects additional parameters
        ]);

        $response->assertStatus(201); // Change to the expected HTTP status code
        // Add more assertions based on your specific test case

        // Example: Assert that the response JSON contains a specific key
        $response->assertJson(['name' => 'mads']);
    }
}
