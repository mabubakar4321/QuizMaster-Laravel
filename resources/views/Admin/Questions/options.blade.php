@extends('admin.dashboard')

@section('content')
    <h2>Add Options for Question: "{{ $question->question_text }}"</h2>

    <form action="{{ route('options.store', $question->id) }}" method="POST">
        @csrf

        @for($i = 0; $i < 4; $i++)
            <div class="mb-3">
                <label>Option {{ $i + 1 }}</label>
                <input type="text" name="options[]" class="form-control" required>

                <label>
                    <input type="checkbox" name="correct[]" value="{{ $i }}"> Is Correct
                </label>
            </div>
        @endfor

        <button type="submit" class="btn btn-primary">Save Options</button>
    </form>
@endsection
