@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header bg-warning">Edit Product</div>
  <div class="card-body">
    <form method="POST" action="{{ route('products.update',$product) }}" enctype="multipart/form-data">
      @csrf @method('PUT')
      <div class="mb-3"><label>Name</label><input type="text" class="form-control" name="name" value="{{ $product->name }}"></div>
      <div class="mb-3"><label>Category</label><input type="text" class="form-control" name="category" value="{{ $product->category }}"></div>
      <div class="mb-3"><label>Price</label><input type="number" step="0.01" class="form-control" name="price" value="{{ $product->price }}"></div>
      <div class="mb-3"><label>Description</label><textarea class="form-control" name="description">{{ $product->description }}</textarea></div>
      <div class="mb-3"><label>Stock</label><input type="number" class="form-control" name="stock_quantity" value="{{ $product->stock_quantity }}"></div>
      <div class="mb-3"><label>Image</label><input type="file" class="form-control" name="image"></div>
      @if($product->image)
        <img src="{{ asset('storage/'.$product->image) }}" width="100" class="mt-2 rounded">
      @endif
      <button class="btn btn-primary mt-3">Update</button>
    </form>
  </div>
</div>
@endsection
