<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function pictures(): HasMany
    {
        return $this->hasMany(Picture::class);
    }
    public function stock(): HasMany
    {
        return $this->hasMany(Stock::class);
    }
    public function orders ()
    {
        return $this->belongsToMany(Order::class);
    }
}
