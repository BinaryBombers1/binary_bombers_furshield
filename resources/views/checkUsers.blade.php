@extends('layouts.app')

@section('content')
<div class="container">
    {{-- ===== Role Statistics ===== --}}
    <h2>User Role Statistics</h2>

    <div class="row mb-4" style="margin-top: 60px;">
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h4>{{ $ownersCount }}</h4>
                    <p>Owners</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h4>{{ $vetsCount }}</h4>
                    <p>Vets</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h4>{{ $sheltersCount }}</h4>
                    <p>Shelters</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h4>{{ $adminsCount }}</h4>
                    <p>Admins</p>
                </div>
            </div>
        </div>
    </div>

    {{-- ===== Chart Section ===== --}}
    <div class="row mb-5">
        <div class="col-md-6 offset-md-3" style="height:300px;">
            <canvas id="rolesChart" style="max-height:100%;"></canvas>
        </div>
    </div>

    {{-- ===== Search & Filter ===== --}}
    <h2>Manage User Roles</h2>

    <form method="GET" action="{{ route('users.index') }}" class="mb-3 d-flex">
        <input type="text" name="search" class="form-control me-2"
               placeholder="Search by name or email" value="{{ request('search') }}">
        
        <select name="role" class="form-select me-2">
            <option value="">All Roles</option>
            <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="vet" {{ request('role') == 'vet' ? 'selected' : '' }}>Vet</option>
            <option value="owner" {{ request('role') == 'owner' ? 'selected' : '' }}>Owner</option>
            <option value="shelter" {{ request('role') == 'shelter' ? 'selected' : '' }}>Shelter</option>
        </select>

        <button type="submit" class="btn btn-primary">Filter</button>
    </form>

    {{-- ===== Users Table ===== --}}
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>User</th>
                <th>Email</th>
                <th>Current Role</th>
                <th>Update Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if($user->role)
                        <span class="badge bg-primary">{{ ucfirst($user->role) }}</span>
                    @else
                        <span class="badge bg-secondary">No Role</span>
                    @endif
                </td>
                <td>
                    <form action="{{ route('users.updateRole', $user->id) }}" method="POST" class="d-flex">
                        @csrf
                        <select name="role" class="form-select form-select-sm me-2">
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="vet" {{ $user->role == 'vet' ? 'selected' : '' }}>Veterinarian</option>
                            <option value="owner" {{ $user->role == 'owner' ? 'selected' : '' }}>Pet Owner</option>
                            <option value="shelter" {{ $user->role == 'shelter' ? 'selected' : '' }}>Shelter</option>
                        </select>
                        <button type="submit" class="btn btn-success btn-sm">Update</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('users.removeRole', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-warning btn-sm"
                                onclick="return confirm('Remove role from this user?')">
                            Remove Role
                        </button>
                    </form>

                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this user?')">
                            Delete User
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No users found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{-- ===== Pagination ===== --}}
    <div class="d-flex justify-content-center">
        {{ $users->links() }}
    </div>
</div>

{{-- Pass data to JS file --}}
<script>
    window.ownersCount = {{ $ownersCount }};
    window.vetsCount = {{ $vetsCount }};
    window.sheltersCount = {{ $sheltersCount }};
    window.adminsCount = {{ $adminsCount }};
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('js/rolesChart.js') }}"></script>



@endsection
