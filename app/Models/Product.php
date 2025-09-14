<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category', 'price', 'description', 'stock_quantity', 'image'];


    // app/Models/Product.php
    public function ratings()
    {
        return $this->morphMany(Rating::class, 'rateable');
    }
}
