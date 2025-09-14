<?php

// database/seeders/ProductSeeder.php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder {
    public function run(): void {
        Product::insert([
            ['name'=>'Dog Food','category'=>'food','price'=>20,'description'=>'Healthy dry food','stock_quantity'=>100],
            ['name'=>'Cat Toy','category'=>'toys','price'=>10,'description'=>'Interactive toy','stock_quantity'=>50],
            ['name'=>'Shampoo','category'=>'grooming','price'=>15,'description'=>'Pet shampoo','stock_quantity'=>30],
        ]);
    }
}
