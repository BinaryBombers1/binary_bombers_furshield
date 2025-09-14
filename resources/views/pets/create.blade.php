@include('header')

<div class="page-header">
    <div class="container">
        <h1>🐾 Add New Pet</h1>
        <p>Welcome a new furry friend to your family</p>
    </div>
</div>

<div class="container">
    <div class="form-container">
        <div class="form-card">
            <div class="form-header">
                <div class="form-icon">
                    <i class="fas fa-paw"></i>
                </div>
                <h2>Pet Information</h2>
                <p>Tell us about your beloved pet</p>
            </div>

            {{-- yahan original route use kar rahe hain (pets.store) --}}
            <form action="{{ route('pets.store') }}" method="POST" enctype="multipart/form-data" class="pet-form">
                @csrf
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="name" class="form-label">
                            <i class="fas fa-tag"></i>
                            Pet Name *
                        </label>
                        <input type="text" 
                               id="name" 
                               name="name" 
                               class="form-control @error('name') is-invalid @enderror" 
                               value="{{ old('name') }}"
                               placeholder="Enter your pet's name"
                               required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="species" class="form-label">
                            <i class="fas fa-paw"></i>
                            Species *
                        </label>
                        <input type="text" 
                               id="species" 
                               name="species" 
                               class="form-control @error('species') is-invalid @enderror"
                               value="{{ old('species') }}"
                               placeholder="e.g. Dog, Cat, Bird" required>
                        @error('species')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="breed" class="form-label">
                            <i class="fas fa-dna"></i>
                            Breed
                        </label>
                        <input type="text" 
                               id="breed" 
                               name="breed" 
                               class="form-control @error('breed') is-invalid @enderror" 
                               value="{{ old('breed') }}"
                               placeholder="e.g., Golden Retriever, Persian, etc.">
                        @error('breed')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="age" class="form-label">
                            <i class="fas fa-birthday-cake"></i>
                            Age (years)
                        </label>
                        <input type="number" 
                               id="age" 
                               name="age" 
                               class="form-control @error('age') is-invalid @enderror" 
                               value="{{ old('age') }}"
                               placeholder="Enter age in years"
                               min="0" 
                               max="30">
                        @error('age')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="image" class="form-label">
                        <i class="fas fa-image"></i>
                        Pet Photo
                    </label>
                    <input type="file" 
                           id="image" 
                           name="image" 
                           class="form-control @error('image') is-invalid @enderror" 
                           accept="image/*">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-actions">
                    <a href="{{ route('pets.index') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left me-2"></i>Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>Save Pet
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('footer')
