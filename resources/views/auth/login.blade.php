@include('header')

<style>
    .btn-brown { background:#885525; border-color:#885525; color:#fff; }
    .btn-brown:hover { background:#6f431f; border-color:#6f431f; color:#fff; }
    .card-accent { border-top:4px solid #885525; }
    .form-control:focus, .form-select:focus { border-color:#885525; box-shadow:0 0 0 .2rem rgba(136,85,37,.15); }
    .link-brown { color:#885525; text-decoration:none; }
    .link-brown:hover { color:#6f431f; text-decoration:underline; }
</style>

<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="card shadow-lg p-4 card-accent" style="max-width: 400px; width: 100%;">
        
        {{-- Logo --}}
        <img src="{{ asset('assets/logo.png') }}" alt="Logo" style="height: 120px; width: 120px; margin: 0 auto; display:block;">

        {{-- Login Form --}}
        <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- Email --}}
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input 
                    type="email" 
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required autofocus
                    class="form-control @error('email') is-invalid @enderror">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Password --}}
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input 
                    type="password" 
                    id="password"
                    name="password"
                    required
                    class="form-control @error('password') is-invalid @enderror">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Remember Me --}}
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>

            {{-- Submit --}}
            <div class="d-grid">
                <button type="submit" class="btn btn-brown">Login</button>
            </div>

            {{-- Forgot Password --}}
            <div class="mt-3 text-center">
                <a href="{{ route('password.request') }}" class="link-brown">Forgot Password?</a>
            </div>
        </form>

        {{-- Sign up link --}}
        <div class="text-center mt-3">
            <small>Don't have an account? <a href="{{ route('register') }}" class="link-brown">Sign up</a></small>
        </div>
    </div>
</div>


