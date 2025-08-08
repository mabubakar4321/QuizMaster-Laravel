@extends('admin.dashboard')

@section('content')
<style>
    .quiz-form-container {
        max-width: 600px;
        margin: 50px auto;
        padding: 30px;
        background: #ffffff;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .quiz-form-container h1 {
        text-align: center;
        margin-bottom: 30px;
        color: #333;
    }

    .quiz-form-container input[type="text"],
    .quiz-form-container select {
        width: 100%;
        padding: 12px 15px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }

    .quiz-form-container input[type="text"]:focus,
    .quiz-form-container select:focus {
        border-color: #007bff;
        outline: none;
    }

    .quiz-form-container input[type="submit"] {
        width: 100%;
        padding: 12px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .quiz-form-container input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .quiz-form-container .top-button {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 15px;
    }
</style>

<div class="quiz-form-container">

    <div class="top-button">
        <a href="{{ url('showquizzes') }}" class="btn btn-outline-info btn-sm">
            <i class="bi bi-eye"></i> Show Quiz Detail
        </a>
    </div>

    <h1>Add Quizzes</h1>

    <form action="{{ url('addquizesss') }}" method="POST">
        @csrf

        <label for="name">Quiz Title</label>
        <input type="text" name="name" id="name" placeholder="Enter quiz name" required>

        <label for="category">Category</label>
        <select name="category_id" id="category" required>
            <option value="">Select Category</option>
            @foreach ($data as $items)
                <option value="{{ $items->id }}">{{ $items->name }}</option>
            @endforeach
        </select>

        <input type="submit" value="Create Quiz">
    </form>
</div>
@endsection
