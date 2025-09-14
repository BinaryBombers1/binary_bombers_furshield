@extends('layouts.app')
@section('content')
<div class="card" style="margin-top: 100px !important;">
  <div class="card-header bg-primary text-white" style="background-color: #885525 !important;">Add Health Record</div>
  <div class="card-body">
    <form method="POST" action="{{ route('pets.health.store',$pet) }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-3"><label>Date</label><input type="date" class="form-control" name="visit_date"></div>
      <div class="mb-3"><label>Type</label>
        <select class="form-select" name="type">
          <option>Vaccination</option>
          <option>Illness</option>
          <option>Allergy</option>
          <option>Treatment</option>
          <option>Checkup</option>
        </select>
      </div>
      <div class="mb-3"><label>Notes</label><textarea class="form-control" name="notes"></textarea></div>
      <div class="mb-3"><label>Document</label><input type="file" class="form-control" name="document"></div>
      <button class="btn btn-success">Save</button>
    </form>
  </div>
</div>
@endsection
