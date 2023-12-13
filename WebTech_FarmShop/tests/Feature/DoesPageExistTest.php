<?php

namespace Tests\Feature;

use Tests\TestCase;

class DoesPageExistTest extends TestCase
{
    //Test to check if our routing is done correctly and loads pages without error
    public function testBuyPageExists(): void
    {
        $response = $this->get(route('buy'));

        $response->assertStatus(200);
    }

    public function testUserPageExists(): void
    {
        $response = $this->get(route('userpage'));

        $response->assertStatus(200);
    }
    public function testBasketPageExists(): void
    {
        $response = $this->get(route('basket'));

        $response->assertStatus(200);
    }
    public function testLoginPageExists(): void
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200);
    }
    /*public function testLogoutPageExists(): void
    {
        $response = $this->get(route(''));

        $response->assertStatus(200);
    } */
    public function testHomePageExists(): void
    {
        $response = $this->get(route('welcome'));

        $response->assertStatus(200);
    }
}
