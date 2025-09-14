{{-- resources/views/auth/register.blade.php --}}
@include('header')

<style>
    .btn-brown { background:#885525; border-color:#885525; color:#fff; }
    .btn-brown:hover { background:#6f431f; border-color:#6f431f; color:#fff; }
    .card-accent { border-top:4px solid #885525; }
    .form-control:focus, .form-select:focus { border-color:#885525; box-shadow:0 0 0 .2rem rgba(136,85,37,.15); }
    .link-brown { color:#885525; text-decoration:none; }
    .link-brown:hover { color:#6f431f; text-decoration:underline; }
</style>

<div class="container d-flex align-items-center justify-content-center vh-100 mt-5" style="margin-top: 150px !important;">
    <div class="card shadow-lg p-4 card-accent" style="max-width: 500px; width: 100%;">
        
        {{-- Logo --}}
        <img src="{{ asset('assets/logo.png') }}" alt="Logo" style="height: 90px; width: 150px; margin: 0 auto; display:block;">

        {{-- Register Form --}}
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            {{-- Name --}}
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input 
                    type="text" 
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    required
                    class="form-control @error('name') is-invalid @enderror">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Email --}}
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input 
                    type="email" 
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
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

            {{-- Confirm Password --}}
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input 
                    type="password" 
                    id="password_confirmation"
                    name="password_confirmation"
                    required
                    class="form-control">
            </div>

            {{-- Role --}}
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select 
                    id="role"
                    name="role"
                    required
                    class="form-select @error('role') is-invalid @enderror">
                    <option value="">Select Role</option>
                    <option value="owner" {{ old('role') == 'owner' ? 'selected' : '' }}>Pet Owner</option>
                    <option value="vet" {{ old('role') == 'vet' ? 'selected' : '' }}>Veterinarian</option>
                    <option value="shelter" {{ old('role') == 'shelter' ? 'selected' : '' }}>Animal Shelter</option>
                </select>
                @error('role')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

           

            {{-- Submit --}}
            <div class="d-grid">
                <button type="submit" class="btn btn-brown">Sign Up</button>
            </div>
        </form>

        {{-- Login link --}}
        <div class="text-center mt-3">
            <small>Already have an account? <a href="{{ route('login') }}" class="link-brown">Login</a></small>
        </div>
    </div>
</div>

