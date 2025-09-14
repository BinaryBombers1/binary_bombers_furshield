<!-- resources/views/auth/forgot-password.blade.php -->
@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card shadow">
      <div class="card-header bg-warning">Forgot Password</div>
      <div class="card-body">
        <form method="POST" action="{{ route('password.email') }}">
          @csrf
          <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" name="email" required>
          </div>
          <button type="submit" class="btn btn-warning w-100">Send Reset Link</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
