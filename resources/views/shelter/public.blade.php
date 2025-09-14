@extends('layouts.app')
@section('content')
<h2>Adoption Listings</h2>
<div class="row">
@foreach($pets as $p)
  <div class="col-md-4 mb-3">
    <div class="card">
      @if($p->image)<img src="{{ asset('storage/'.$p->image) }}" class="card-img-top">@endif
      <div class="card-body">
        <h5>{{ $p->pet_name }} ({{ $p->species }})</h5>
        <p>Breed: {{ $p->breed }} | Age: {{ $p->age }}</p>
        <span class="badge bg-success">{{ $p->status }}</span>
      </div>
    </div>
  </div>
@endforeach
</div>
@endsection
