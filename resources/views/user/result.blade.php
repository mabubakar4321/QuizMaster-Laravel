@extends('user.layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(to right, #fdfcff, #eef2ff);
        font-family: 'Poppins', sans-serif;
    }

    .result-container {
        background: #ffffff;
        padding: 50px;
        border-radius: 16px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        margin: 60px auto;
        max-width: 600px;
        text-align: center;
    }

    .result-container h2 {
        font-size: 2.2rem;
        font-weight: 600;
        color: #4e73df;
        margin-bottom: 30px;
    }

    .result-card {
        background-color: #f1f3f9;
        border-radius: 12px;
        padding: 20px 30px;
        margin: 15px 0;
        font-size: 1.2rem;
        transition: transform 0.3s ease;
    }

    .result-card:hover {
        transform: scale(1.02);
        background-color: #e2e6f0;
    }

    .result-card strong {
        color: #333;
    }
</style>

<div class="container result-container">
    <h2>Your Quiz Results</h2>

    <div class="result-card">
        <p><strong>Total Questions:</strong> {{ $total }}</p>
    </div>

    <div class="result-card">
        <p><strong>Correct Answers:</strong> {{ $correct }}</p>
    </div>

    <div class="result-card">
        <p><strong>Incorrect Answers:</strong> {{ $incorrect }}</p>
    </div>
</div>
@endsection
