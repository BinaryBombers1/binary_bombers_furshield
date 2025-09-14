@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header bg-info text-white">Add Product</div>
  <div class="card-body">
    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-3"><label>Name</label><input type="text" class="form-control" name="name"></div>
      <div class="mb-3"><label>Category</label><input type="text" class="form-control" name="category"></div>
      <div class="mb-3"><label>Price</label><input type="number" step="0.01" class="form-control" name="price"></div>
      <div class="mb-3"><label>Description</label><textarea class="form-control" name="description"></textarea></div>
      <div class="mb-3"><label>Stock</label><input type="number" class="form-control" name="stock_quantity"></div>
      <div class="mb-3"><label>Image</label><input type="file" class="form-control" name="image"></div>
      <button class="btn btn-success">Save</button>
    </form>
  </div>
</div>
@endsection
