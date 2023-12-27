<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DoesPageExistTest extends TestCase
{
    //Test to check if our routing is done correctly and loads pages without error
    public function test_it_can_access_protected_routes()
    {
        $x = User::factory(1)->create()->first();
        $response = $this->actingAs($x)->get(route('buy'))->assertStatus(200);


        $response = $this->get(route('buy'));
        $response->assertStatus(200);


        $response = $this->get(route('admin'));
        $response->assertStatus(200);


        $response = $this->get(route('basket'));
        $response->assertStatus(200);


        $response = $this->get(route('registerPage'));
        $response->assertStatus(200);

        $response = $this->get(route('home'));
        $response->assertStatus(200);

        $response = $this->get(route('welcome'));
        $response->assertStatus(200);
    }
}
