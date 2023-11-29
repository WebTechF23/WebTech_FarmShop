<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->string('fileName');
            $table->string('fileExtension');
            $table->timestamps();

        });
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity')->nullable();
            $table->timestamps();

        });
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->integer('quantityBought');
            $table->double('totalPrice');
            $table->timestamps();


        });
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('price');
            $table->string('dateAdded');
            $table->unsignedBigInteger('picture_id');
            $table->unsignedBigInteger('stock_id');

            $table->foreign('picture_id')->references('id')->on('pictures')->onDelete('cascade');
            $table->foreign('stock_id')->references('id')->on('stocks')->onDelete('cascade');
            $table->timestamps();

        });
        Schema::create('orders_products',function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('pictures');
        Schema::dropIfExists('stock');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('products');
        Schema::dropIfExists('orders_products');
    }
};
