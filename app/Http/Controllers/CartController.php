<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function index()
    {
        $order = Order::firstOrCreate(['user_id' => Auth::id(), 'status' => 'cart']);
        return view('cart.index', ['order' => $order]);
    }
    public function add(Product $product)
    {
        $order = Order::firstOrCreate(['user_id' => Auth::id(), 'status' => 'cart']);
        $item = $order->items()->where('product_id', $product->id)->first();
        if ($item) $item->increment('quantity');
        else $order->items()->create([
            'product_id' => $product->id,
            'quantity' => 1,
            'price_each' => $product->price
        ]);
        $order->update(['total_amount' => $order->items->sum(fn($i) => $i->quantity * $i->price_each)]);
        return back();
    }
    public function remove(OrderItem $item)
    {
        $order = $item->order;
        $item->delete();
        $order->update([
            'total_amount' => $order->items->sum(fn($i) => $i->quantity * $i->price_each)
        ]);
        return redirect()->route('cart.index')->with('success', 'Item removed.');
    }
}
