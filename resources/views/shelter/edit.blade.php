@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header bg-warning">Edit Adoption Listing</div>
  <div class="card-body">
    <form method="POST" action="{{ route('shelter.update',$listing) }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-3"><label>Pet Name</label><input type="text" class="form-control" name="pet_name" value="{{ $listing->pet_name }}"></div>
      <div class="mb-3"><label>Species</label><input type="text" class="form-control" name="species" value="{{ $listing->species }}"></div>
      <div class="mb-3"><label>Breed</label><input type="text" class="form-control" name="breed" value="{{ $listing->breed }}"></div>
      <div class="mb-3"><label>Age</label><input type="number" class="form-control" name="age" value="{{ $listing->age }}"></div>
      <div class="mb-3"><label>Health Status</label><input type="text" class="form-control" name="health_status" value="{{ $listing->health_status }}"></div>
      <div class="mb-3"><label>Status</label>
        <select class="form-select" name="status">
          <option value="available" @if($listing->status=='available') selected @endif>Available</option>
          <option value="adopted" @if($listing->status=='adopted') selected @endif>Adopted</option>
        </select>
      </div>
      <div class="mb-3"><label>Image</label><input type="file" class="form-control" name="image"></div>
      @if($listing->image)
        <img src="{{ asset('storage/'.$listing->image) }}" width="100" class="mt-2 rounded">
      @endif
      <button class="btn btn-primary mt-3">Update</button>
    </form>
  </div>
</div>
@endsection
