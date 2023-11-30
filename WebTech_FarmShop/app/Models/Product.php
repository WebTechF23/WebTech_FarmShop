<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function pictures()
    {
        return $this->belongsTo(Picture::class,'picture_id');
    }

    public function stocks(): HasMany
    {
        return $this->belongsTo(Stock::class,'stock_id');
    }
    public function orders ()
    {
        return $this->belongsToMany(Order::class);
    }
}
