<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','unit_price'];
    public function pictures()
    {
        return $this->belongsTo(Picture::class,'picture_id');
    }

    public function stocks()
    {
        return $this->belongsTo(Stock::class,'stock_id');
    }
    public function order (): BelongsToMany
    {
        return $this->belongsToMany(Order::class,'order_products');
    }
}
