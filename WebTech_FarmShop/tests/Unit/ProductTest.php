<?php

namespace Tests\Unit;

use App\Models\Picture;
use App\Models\Product;
use App\Models\Stock;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class ProductTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function test_it_seeds_users_stocks_pictures_and_products()
    {
        $this->seed();

        $this->assertCount(3, \App\Models\User::all());

        $this->assertCount(6, \App\Models\Stock::all());

        $this->assertCount(6, \App\Models\Picture::all());

        $this->assertCount(6, \App\Models\Product::all());

    }

    public function test_make_a_product() {

        $picture = Picture::create([
            'fileName' => 'example',
            'fileExtension' => 'jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $stock = Stock::create([
            'quantity' => 100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        $product = Product::create([
            'name' => 'testProducts',
            'unit_price' => 200,
            'dateAdded' => '2023-03-22',
            'description' => 'this is a test',
            'picture_id' => $picture->id,
            'stock_id' => $stock->id,
        ]);

        $this->assertInstanceOf(Product::class, $product);

        // Assert that the attributes were set correctly
        $this->assertEquals('testProducts', $product->name);
        $this->assertEquals(200, $product->unit_price);
        $this->assertEquals('2023-03-22', $product->dateAdded);
        $this->assertEquals('this is a test', $product->description);


        // Assert that timestamps were automatically managed
        $this->assertNotNull($product->created_at);
        $this->assertNotNull($product->updated_at);

        // Assert that picture_id and stock_id is not null
        $this->assertNotNull($product->picture_id);
        $this->assertNotNull($product->stock_id);

    }
}
