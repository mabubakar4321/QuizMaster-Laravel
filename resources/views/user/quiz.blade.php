@extends('user.layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(to right, #fdfcff, #f0f4ff);
        font-family: 'Poppins', sans-serif;
    }

    .quiz-container {
        background: #ffffff;
        padding: 50px;
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        margin-top: 60px;
        margin-bottom: 60px;
    }

    .quiz-container h2 {
        font-weight: 600;
        font-size: 2rem;
        margin-bottom: 35px;
        color: #2d2e83;
        text-align: center;
    }

    .question {
        margin-bottom: 30px;
    }

    .question strong {
        display: block;
        font-size: 1.15rem;
        color: #333;
        margin-bottom: 15px;
    }

    .option input[type="radio"] {
        accent-color: #4e73df;
        transform: scale(1.2);
        margin-right: 12px;
    }

    .option {
        background-color: #f1f3f9;
        border-radius: 8px;
        padding: 12px 18px;
        margin-bottom: 10px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s;
        display: flex;
        align-items: center;
    }

    .option:hover {
        background-color: #e2e6f0;
        transform: translateX(4px);
    }

    .btn-submit {
        background-color: #4e73df;
        color: #fff;
        padding: 12px 30px;
        font-size: 1rem;
        font-weight: 500;
        border: none;
        border-radius: 8px;
        transition: background-color 0.3s ease, transform 0.2s;
    }

    .btn-submit:hover {
        background-color: #3a5ecc;
        transform: translateY(-2px);
    }
</style>

<div class="container quiz-container">
    <h2>Take Your Quiz</h2>
    <form action="{{ route('quiz.submit') }}" method="POST">
        @csrf

        @foreach ($questions as $question)
            <div class="question">
                <strong>{{ $loop->iteration }}. {{ $question->question_text }}</strong>

                @foreach ($question->options as $option)
                    <label class="option">
                        <input type="radio" name="answers[{{ $question->id }}]" value="{{ $option->id }}" required>
                        {{ $option->option_text }}
                    </label>
                @endforeach
            </div>
        @endforeach

        <div class="text-center">
            <button type="submit" class="btn btn-submit mt-4">Submit</button>
        </div>
    </form>
</div>
@endsection
