<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class ProductTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_seeds_users_stocks_pictures_and_products()
    {
        $this->seed();

        // Assert that two users are created
        $this->assertCount(2, \App\Models\User::all());

        // Assert that six stocks are created
        $this->assertCount(6, \App\Models\Stock::all());

        // Assert that six pictures are created
        $this->assertCount(6, \App\Models\Picture::all());

        // Assert that six products are created
        $this->assertCount(6, \App\Models\Product::all());

    }
}
