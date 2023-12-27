<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{

    use RefreshDatabase;

    public function testPostRequest(): void
    {
        User::create([
            'name' => 'MadsTest',
            'email' => 'mage@gigantica.com',
            'phoneNumber' => '20202132',
            'password' => bcrypt('mage'),
            'isAdmin' => true,
            'created_at' => now(),
            'updated_at' =>now(),
        ]);


        $response = $this->post(route('loginAuth'), [
            'email' => 'mage@gigantica.com',
            'password' => 'mage'

        ]);

        $response->assertStatus(302);
        // HTTPS CODE 302 means the logged-in user gets redirected to a new page after login

        $response->assertRedirect(route('home'));


    }
}
