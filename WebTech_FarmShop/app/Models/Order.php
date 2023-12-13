<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function product (): BelongsToMany
    {
        return $this->belongsToMany(Product::class,'order_products');
    }
}
