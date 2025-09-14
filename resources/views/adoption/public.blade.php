@extends('layouts.app')
@section('content')

<h2>Available Pets for Adoption</h2>
<div class="row" >
@foreach($pets as $p)
  <div class="col-md-4 mb-3">
    <div class="card h-100 shadow-sm">
      @if($p->image)
        <img src="{{ asset('storage/'.$p->image) }}" class="card-img-top" style="height:200px;object-fit:cover;">
      @endif
      <div class="card-body">
        <h5>{{ $p->pet_name }} ({{ $p->species }})</h5>
        <p>Breed: {{ $p->breed ?? 'N/A' }}</p>
        <p>Age: {{ $p->age }} years</p>
        <p>Health: {{ $p->health_status }}</p>
        <span class="badge bg-success">{{ ucfirst($p->status) }}</span>
      </div>
    </div>
  </div>
@endforeach
</div>
@endsection
