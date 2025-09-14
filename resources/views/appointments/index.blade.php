@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between mb-3" style="margin-top: 100px !important;">
  <h2>My Appointments</h2>
  <a href="{{ route('appointments.create') }}" class="btn btn-primary">Book Appointment</a>
</div>

<table class="table table-striped align-middle">
  <thead>
    <tr>
      <th>Pet</th>
      <th>Vet</th>
      <th>Date & Time</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($appointments as $appt)
    <tr>
      <td>{{ $appt->pet->name }}</td>
      <td>{{ $appt->vet->name }}</td>
      <td>{{ $appt->appointment_time }}</td>
      <td><span class="badge bg-info">{{ ucfirst($appt->status) }}</span></td>
      <td>
        <form method="POST" action="{{ route('appointments.destroy',$appt) }}" class="d-inline">
          @csrf @method('DELETE')
          <button class="btn btn-sm btn-danger">Cancel</button>
        </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection
