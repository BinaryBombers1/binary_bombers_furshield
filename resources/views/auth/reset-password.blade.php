<!-- resources/views/auth/reset-password.blade.php -->
@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card shadow">
      <div class="card-header bg-info text-white">Reset Password</div>
      <div class="card-body">
        <form method="POST" action="{{ route('password.update') }}">
          @csrf
          <input type="hidden" name="token" value="{{ $request->route('token') }}">
          <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" name="email" required>
          </div>
          <div class="mb-3">
            <label>New Password</label>
            <input type="password" class="form-control" name="password" required>
          </div>
          <div class="mb-3">
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" required>
          </div>
          <button type="submit" class="btn btn-info w-100">Reset</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
