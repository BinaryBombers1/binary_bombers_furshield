@extends('layouts.app')
@section('content')
<div class="card" style="margin-top: 100px !important;">
  <div class="card-header bg-primary text-white" style="background-color: #885525 !important;">Book Appointment</div>
  <div class="card-body">
    <form method="POST" action="{{ route('appointments.store') }}">
      @csrf
      <div class="mb-3">
        <label>Pet</label>
        <select name="pet_id" class="form-select">
          @foreach($pets as $p)
            <option value="{{ $p->id }}">{{ $p->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label>Vet</label>
        <select name="vet_id" class="form-select">
          @foreach($vets as $v)
            <option value="{{ $v->id }}">{{ $v->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label>Date & Time</label>
        <input type="datetime-local" class="form-control" name="appointment_time">
      </div>
      <button class="btn btn-success">Book</button>
    </form>
  </div>
</div>
@endsection
