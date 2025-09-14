@include('header')

<div class="container mt-4"  style="margin-top: 100px !important;">
    <div class="card shadow-lg">
        <div class="card-header bg-warning text-dark fw-bold" style="background-color: #885525 !important;">
            ✏️ Edit Pet
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('pets.update',$pet) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Pet Name --}}
                <div class="mb-3">
                    <label class="form-label">🐾 Pet Name</label>
                    <input type="text" 
                           name="name" 
                           class="form-control @error('name') is-invalid @enderror" 
                           value="{{ old('name', $pet->name) }}" 
                           required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Species --}}
                <div class="mb-3">
                    <label class="form-label">🧬 Species</label>
                    <input type="text" 
                           name="species" 
                           class="form-control @error('species') is-invalid @enderror" 
                           value="{{ old('species', $pet->species) }}" 
                           required>
                    @error('species')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Breed --}}
                <div class="mb-3">
                    <label class="form-label">📌 Breed</label>
                    <input type="text" 
                           name="breed" 
                           class="form-control @error('breed') is-invalid @enderror" 
                           value="{{ old('breed', $pet->breed) }}">
                    @error('breed')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Age --}}
                <div class="mb-3">
                    <label class="form-label">🎂 Age</label>
                    <input type="number" 
                           name="age" 
                           class="form-control @error('age') is-invalid @enderror" 
                           value="{{ old('age', $pet->age) }}">
                    @error('age')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Gender --}}
                <div class="mb-3">
                    <label class="form-label">⚧ Gender</label>
                    <select name="gender" class="form-select @error('gender') is-invalid @enderror">
                        <option value="Male" {{ old('gender',$pet->gender)=="Male" ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender',$pet->gender)=="Female" ? 'selected' : '' }}>Female</option>
                    </select>
                    @error('gender')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Image --}}
                <div class="mb-3">
                    <label class="form-label">🖼️ Pet Image</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    @if($pet->image)
                        <div class="mt-2">
                        <img src="{{ asset('images/'.$pet->image) }}" width="120" class="rounded shadow-sm border"></div>
                    @endif
                </div>

                {{-- Buttons --}}
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('pets.index') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left"></i> Cancel
                    </a>
                    <button class="btn btn-primary">
                        <i class="fas fa-save"></i> Update Pet
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('footer')
