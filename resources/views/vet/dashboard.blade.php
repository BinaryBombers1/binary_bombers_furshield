<!-- resources/views/vet/dashboard.blade.php -->
@extends('layouts.app')
@section('content')
<h3 class="mb-3">Vet Dashboard</h3>
<table class="table table-striped" style="margin-top: 45px;">
  <thead>
    <tr><th>Pet</th><th>Owner</th><th>Time</th><th>Status</th><th>Actions</th></tr>
  </thead>
  <tbody>
  @foreach($appointments as $appt)
    <tr>
      <td>{{ $appt->pet->name }}</td>
      <td>{{ $appt->owner->name }}</td>
      <td>{{ $appt->appointment_time }}</td>
      <td><span class="badge bg-info">{{ $appt->status }}</span></td>
      <td>
        <form method="POST" action="{{ route('vet.appointment.update',$appt) }}">
          @csrf
          <select name="status" class="form-select form-select-sm d-inline w-auto">
            <option>approved</option>
            <option>rescheduled</option>
            <option>cancelled</option>
          </select>
          <button class="btn btn-sm btn-primary">Update</button>
        </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection
