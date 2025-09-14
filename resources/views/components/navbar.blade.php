<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurShield - Your Pet's Happiness, Our Priority</title>
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container" style="justify-content: space-around;">
            <div class="nav-brand">
                @if(auth()->check()) <!-- Check if the user is authenticated -->
                    @if(auth()->user()->role === 'admin')
                        <h1 class="logo"><a href="/checkUser">Admin<span class="paw-print">.</span></a></h1>
                    @else
                        <h1 class="logo"><a href="/">FurShield<span class="paw-print">.</span></a></h1>
                    @endif
                @else
                    <h1 class="logo"><a href="/">FurShield<span class="paw-print">.</span></a></h1>
                @endif
            </div>
            <nav class="nav-menu d-none d-md-block">
                <ul class="nav-list">
                    <li><a href="/" class="nav-link active">Home</a></li>
                    <li><a href="/about" class="nav-link">About</a></li>
                    <li><a href="/contact" class="nav-link">Contact</a></li>
                    @auth
                        <!-- Role-based Menu for Authenticated Users -->
                        @if(auth()->user()->role === 'owner' || auth()->user()->role == '')
                            <li class="nav-item"><a class="nav-link" href="{{ route('pets.index') }}">Pets</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('appointments.index') }}">Appointments</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Shop</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('cart.index') }}">Cart</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="healthDropdown" role="button" data-bs-toggle="dropdown">
                                  Health
                                </a>
                                <ul class="dropdown-menu">
                                  @foreach(auth()->user()->pets as $pet)
                                    <li><a class="dropdown-item" href="{{ route('pets.health.index',$pet) }}">{{ $pet->name }}'s Records</a></li>
                                  @endforeach
                                </ul>
                            </li>
                        @elseif(auth()->user()->role === 'vet')
                            <li><a href="vet/dashboard" class="nav-link">Dasboard</a></li>
                        @elseif(auth()->user()->role === 'shelter')
        
                            <li class="nav-item"><a class="nav-link" href="/shelter/check">All pets</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('shelter.dashboard') }}">Shelter Dashboard</a></li>
                        @elseif(auth()->user()->role === 'admin')
                            <!-- Admin Specific Menu -->
                            <li><a href="/admin/users" class="nav-link">Manage Users</a></li>
                            <!-- <li><a href="/admin/roles" class="nav-link">Manage Roles</a></li>
                            <li><a href="/admin/settings" class="nav-link">Settings</a></li> -->
                        @endif

                        <!-- Logout -->
                        <li class="nav-item">
                          <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger ms-2">Logout</button>
                          </form>
                        </li>
                    @else
                        <!-- Guest (non-authenticated users) -->
                        <a class="login-btn" href="/login">Login</a>
                        <a class="login-btn" href="/register">Register</a>
                    @endauth
                </ul>
            </nav>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container py-4">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @yield('content')
    </div>

</body>
</html>
