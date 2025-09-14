@extends('layouts.app')
@section('content')
<h2 class="mb-4" style="margin-top: 100px !important;">Products</h2>
<div class="row">
  @foreach($products as $p)
  <div class="col-md-4 mb-3" >
    <div class="card h-100 shadow-sm">
      @if($p->image)
      <img src="{{ asset('storage/'.$p->image) }}" class="card-img-top" style="height:200px;object-fit:cover;">
      @endif
      <div class="card-body">
        <h5 class="card-title">{{ $p->name }}</h5>
        <p class="card-text">{{ $p->description }}</p>
        <p><strong>${{ $p->price }}</strong></p>
        <form method="POST" action="{{ route('cart.add',$p) }}">
          @csrf
          <button class="btn btn-success w-100">Add to Cart</button>
        </form>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection