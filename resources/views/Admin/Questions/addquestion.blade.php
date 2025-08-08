@extends('admin.dashboard')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Add Question</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('addquestions') }}" method="POST">
                @csrf

                {{-- Question Text --}}
                <div class="mb-3">
                    <label for="questiontext" class="form-label">Question Text</label>
                    <input type="text" name="questiontext" id="questiontext" class="form-control" placeholder="Enter question..." required>
                </div>

                {{-- Quiz Dropdown --}}
                <div class="mb-3">
                    <label for="quizid" class="form-label">Select Quiz</label>
                    <select name="quiz_id" id="quiz_id" class="form-select" required>
                        <option value="">Select a Quiz</option>
                        @foreach ($quiz as $items)
                            <option value="{{ $items->id }}">{{ $items->name }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Submit Button --}}
                <div class="text-end">
                    <button type="submit" class="btn btn-success">Add Question</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
