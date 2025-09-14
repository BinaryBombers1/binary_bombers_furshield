@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px !important;">
    <div class="card shadow">
        <div class="card-header bg-warning text-white">
            <h5 class="mb-0">Edit Health Record</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('pets.health.update', [$pet->id, $record->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Visit Date --}}
                <div class="mb-3">
                    <label class="form-label">Date</label>
                    <input type="date" 
                           class="form-control @error('visit_date') is-invalid @enderror" 
                           name="visit_date" 
                           value="{{ old('visit_date', $record->visit_date) }}">
                    @error('visit_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Type --}}
                <div class="mb-3">
                    <label class="form-label">Type</label>
                    <select class="form-select @error('type') is-invalid @enderror" name="type">
                        @foreach (['Vaccination','Illness','Allergy','Treatment','Checkup'] as $type)
                            <option value="{{ $type }}" @if($record->type == $type) selected @endif>
                                {{ $type }}
                            </option>
                        @endforeach
                    </select>
                    @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Notes --}}
                <div class="mb-3">
                    <label class="form-label">Notes</label>
                    <textarea class="form-control @error('notes') is-invalid @enderror" 
                              name="notes" rows="3">{{ old('notes', $record->notes) }}</textarea>
                    @error('notes')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Document --}}
                <div class="mb-3">
                    <label class="form-label">Document</label>
                    <input type="file" class="form-control @error('document') is-invalid @enderror" name="document">
                    @error('document')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    @if($record->document)
                        <a href="{{ asset('storage/'.$record->document) }}" 
                           target="_blank" 
                           class="btn btn-sm btn-info mt-2">
                            View Current File
                        </a>
                    @endif
                </div>

                <button class="btn btn-primary mt-3">Update</button>
                <a href="{{ route('pets.health.index', $pet->id) }}" class="btn btn-secondary mt-3">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
