<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Warehouse;
use  App\Models\Product;

class Category extends Model
{
    use HasFactory;

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
