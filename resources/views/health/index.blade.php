@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px !important;">
    <div class="d-flex justify-content-between mb-3">
        <h2>Health Records - {{ $pet->name }}</h2>
        <a href="{{ route('pets.health.create',$pet->id) }}" class="btn btn-success">
            Add Record
        </a>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th>Type</th>
                <th>Date</th>
                <th>Notes</th>
                <th>Document</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($records as $rec)
            <tr>
                <td>{{ $rec->type }}</td>
                <td>{{ $rec->visit_date }}</td>
                <td>{{ $rec->notes }}</td>
                <td>
                    @if($rec->document)
                        <a href="{{ asset('images/'.$rec->document) }}" target="_blank" class="btn btn-sm btn-info">
                            View
                        </a>
                    @else
                        <span class="text-muted">No File</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('pets.health.edit', [$pet->id, $rec->id]) }}" class="btn btn-sm btn-warning">
                        Edit
                    </a>

                    <form method="POST" action="{{ route('pets.health.destroy', [$pet->id, $rec->id]) }}" 
                          class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf 
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center text-muted">No health records found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
