@extends('admin.dashboard')

@section('content')
<div class="container py-4">
    <h1 class="text-center mb-4">All Quizzes Detail</h1>

    {{-- Success Message --}}
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Quiz Name</th>
                    <th>Category Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $items)
                    <tr>
                        <td>{{ $items->id }}</td>
                        <td>{{ $items->name }}</td>
                        <td>{{ $items->category->name }}</td>
                        <td>
                            <a href="{{ url('updatequiz' , $items->id) }}" class="btn btn-warning btn-sm me-1">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <a href="{{ url('deletequizes',$items->id) }}" class="btn btn-danger btn-sm"
                               onclick="return confirm('Are you sure you want to delete this quiz?')">
                                <i class="bi bi-trash3"></i> Delete
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-muted">No quizzes found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
