@extends('admin.dashboard')

@section('content')
    <style>
        .table-container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            padding: 20px;
        }

        .table-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }

        table thead {
            background-color: #007bff;
            color: white;
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .action-btns {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-edit {
            background-color: #28a745;
        }

        .btn-delete {
            background-color: #dc3545;
        }
    </style>

    <div class="table-container">
        <h2>Category List</h2>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example static rows -->
               @foreach ($data as $items )
                <tr>
                    <td>{{ $items->id }}</td>
                    <td>{{ $items->name }}</td>
                    
                    <td class="action-btns">
                        <a href="{{ url('editcateogry',$items->id) }}" class="btn btn-edit">Edit</a>
                        <a href="{{ url('deletecategory',$items->id) }}" class="btn btn-delete">Delete</a>
                    </td>
                </tr>
                    
               @endforeach
                <!-- Add more static rows as needed -->
            </tbody>
        </table>
    </div>
@endsection
