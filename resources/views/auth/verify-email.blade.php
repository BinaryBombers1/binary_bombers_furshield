<!-- resources/views/auth/verify-email.blade.php -->
@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="alert alert-info shadow">
      <h5>Verify Your Email</h5>
      <p>Please check your email for a verification link.</p>
      <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="btn btn-primary">Resend Verification Email</button>
      </form>
    </div>
  </div>
</div>
@endsection
