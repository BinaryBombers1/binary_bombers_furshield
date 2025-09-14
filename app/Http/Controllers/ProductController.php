<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // app/Http/Controllers/ProductController.php
    public function index(Request $r)
    {
        $q = Product::query();
        if ($r->search) $q->where('name', 'like', "%$r->search%");
        if ($r->category) $q->where('category', $r->category);
        $products = $q->get();
        return view('products.index', compact('products'));
    }

    public function store(Request $r)
    {
        $data = $r->all();
        if ($r->hasFile('image')) {
            $data['image'] = $r->file('image')->store('products', 'public');
        }
        Product::create($data);
        return redirect()->route('products.index');
    }


    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
}
