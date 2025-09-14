@extends('layouts.app')
@section('content')
<div class="container">
<h2 style="margin-bottom: 100px !important;">My Cart</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Product</th>
      <th>Qty</th>
      <th>Total</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($order->items as $i)
    <tr>
      <td>{{ $i->product->name }}</td>
      <td>{{ $i->quantity }}</td>
      <td>${{ $i->quantity * $i->price_each }}</td>
      <td>
        <form method="POST" action="{{ route('cart.remove',$i->id) }}">
          @csrf @method('DELETE')
          <button class="btn btn-sm btn-danger">Remove</button>
        </form>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="alert alert-info">
  <strong>Total: ${{ $order->total_amount }}</strong>
</div>
</div>
@endsection