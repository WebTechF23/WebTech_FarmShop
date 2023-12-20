<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_product extends Model
{
    use HasFactory;

    public  function orders (){
        return $this->belongsTo(Order::class,'order_id');
    }

    public  function products(){
        $this->belongsTo(Product::class,'product_id');
    }
}
