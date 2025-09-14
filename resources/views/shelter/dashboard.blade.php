@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between mb-3">
  <h2>My Adoption Listings</h2>
  <a href="{{ route('shelter.create') }}" class="btn btn-success">Add Pet for Adoption</a>
</div>

<table class="table table-striped align-middle">
  <thead>
    <tr>
      <th>Image</th>
      <th>Pet</th>
      <th>Species</th>
      <th>Breed</th>
      <th>Age</th>
      <th>Health</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($listings as $pet)
    <tr>
      <td>
        @if($pet->image)
          <img src="{{ asset('storage/'.$pet->image) }}" width="60" height="60" style="object-fit:cover;" class="rounded">
        @else
          <span class="text-muted">No Image</span>
        @endif
      </td>
      <td>{{ $pet->pet_name }}</td>
      <td>{{ $pet->species }}</td>
      <td>{{ $pet->breed }}</td>
      <td>{{ $pet->age }}</td>
      <td>{{ $pet->health_status }}</td>
      <td><span class="badge bg-{{ $pet->status=='available'?'success':'secondary' }}">{{ ucfirst($pet->status) }}</span></td>
      <td>
        <a href="{{ route('shelter.edit',$pet) }}" class="btn btn-sm btn-warning">Edit</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection
