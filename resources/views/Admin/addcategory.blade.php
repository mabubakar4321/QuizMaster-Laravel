@extends('admin.dashboard')

@section('content')
    <style>
        .category-form {
            max-width: 500px;
            margin: 40px auto;
            padding: 25px;
            background: #fdfdfd;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }

        .category-form h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            color: #555;
        }

        .form-group input[type="text"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="category-form">
        <h2>Add Category</h2>
        <form action="{{ url('addcategory') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" id="name" name="name" placeholder="Enter category name" required>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>


@endsection
