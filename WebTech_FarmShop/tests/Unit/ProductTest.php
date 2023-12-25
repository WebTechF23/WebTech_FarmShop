<?php

namespace Tests\Unit;

use App\Models\Product;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class ProductTest extends TestCase
{


    /** @test */
    public function it_seeds_users_stocks_pictures_and_products()
    {
        $this->seed();

        // Assert that three users are created
        $this->assertCount(3, \App\Models\User::all());

        // Assert that six stocks are created
        $this->assertCount(6, \App\Models\Stock::all());

        // Assert that six pictures are created
        $this->assertCount(6, \App\Models\Picture::all());

        // Assert that six products are created
        $this->assertCount(6, \App\Models\Product::all());

    }

    public function testMake() {
        $product = Product::class;

        $product::create([
            'name' => 'testProducts',
            'price' => '200',
            'dateAdded' => '2023-03-22',
            'description' => 'this is a test',
        ]);

        $this->assertInstanceOf(Product::class, $product);

        // Assert that the attributes were set correctly
        $this->assertEquals('testProduct', $product->name);
        $this->assertEquals('200', $product->price);
        $this->assertEquals('2023-03-22', $product->dateAdded); // Adjust the format if needed
        $this->assertEquals('this is a test', $product->description);


        // Assert that timestamps were automatically managed
        $this->assertNotNull($product->created_at);
        $this->assertNotNull($product->updated_at);

        // Assert that picture_id is not null (assuming it's a foreign key relationship)
        $this->assertNotNull($product->picture_id);
        $this->assertNotNull($product->stock_id);
    }
}
