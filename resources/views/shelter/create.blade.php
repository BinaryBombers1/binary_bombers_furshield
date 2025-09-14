@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header bg-success text-white">Add Adoption Listing</div>
  <div class="card-body">
    <form method="POST" action="{{ route('shelter.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-3"><label>Pet Name</label><input type="text" class="form-control" name="pet_name"></div>
      <div class="mb-3"><label>Species</label><input type="text" class="form-control" name="species"></div>
      <div class="mb-3"><label>Breed</label><input type="text" class="form-control" name="breed"></div>
      <div class="mb-3"><label>Age</label><input type="number" class="form-control" name="age"></div>
      <div class="mb-3"><label>Health Status</label><input type="text" class="form-control" name="health_status"></div>
      <div class="mb-3"><label>Image</label><input type="file" class="form-control" name="image"></div>
      <button class="btn btn-success">Save</button>
    </form>
  </div>
</div>
@endsection
