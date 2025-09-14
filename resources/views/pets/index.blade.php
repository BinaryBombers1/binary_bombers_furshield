@include('header')

<div class="container mt-4" style="margin-top: 100px !important;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>🐾 My Pets</h2>
        <a href="{{ route('pets.create') }}" class="btn btn-success">
            <i class="fas fa-plus-circle"></i> Add New Pet
        </a>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Species</th>
                        <th>Breed</th>
                        <th>Age</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($pets as $pet)
                    <tr>
                        <td>
                            @if($pet->image)
                                {{-- Image public/images se load hogi --}}
                                <img src="{{ asset('images/'.$pet->image) }}" 
                                     width="60" height="60" 
                                     style="object-fit:cover;" 
                                     class="rounded">
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>
                        <td>{{ $pet->name }}</td>
                        <td>{{ $pet->species }}</td>
                        <td>{{ $pet->breed }}</td>
                        <td>{{ $pet->age }}</td>
                        <td class="text-center">
                            <a href="{{ route('pets.edit',$pet) }}" class="btn btn-sm btn-warning me-1">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form method="POST" action="{{ route('pets.destroy',$pet) }}" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this pet?')">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">No pets found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('footer')
