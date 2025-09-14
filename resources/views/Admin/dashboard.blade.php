@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Admin Dashboard</h1>

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <h3>Pending Users</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Temp Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pendingUsers as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->temprole }}</td>
                    <td>
                        <a href="{{ url('/admin/approve/'.$user->id) }}" class="btn btn-success btn-sm">Approve</a>
                        <a href="{{ url('/admin/remove/'.$user->id) }}" class="btn btn-danger btn-sm">Remove</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Admins</h3>
    <ul>
        @foreach($admins as $admin)
            <li>{{ $admin->name }} - {{ $admin->email }}</li>
        @endforeach
    </ul>
</div>
@endsection
