@extends('layouts.app')
@section('content')
<h2>Notifications</h2>
<ul class="list-group">
@foreach(auth()->user()->notifications as $note)
  <li class="list-group-item d-flex justify-content-between">
    {{ $note->data['message'] }}
    <span class="text-muted">{{ $note->created_at->diffForHumans() }}</span>
  </li>
@endforeach
</ul>
@endsection
