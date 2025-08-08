@extends('admin.dashboard')

@section('content')
<div class="container mt-5">
    {{-- Add Questions Button --}}
    <div class="mb-3 text-end">
        <a href="{{ url('addquestions') }}" class="btn btn-primary">+ Add Question</a>
    </div>

    {{-- Questions Table --}}
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Questions List</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Question ID</th>
                        <th>Question Text</th>
                        <th>Quiz Name</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($questions as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->question_text }}</td>
                            <td>{{ $item->quiz->name }}</td>
                            <td>
   <a href="{{ route('options.create', $item->id) }}" class="btn btn-sm btn-primary">
    Add Options
</a>
</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">No questions found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
