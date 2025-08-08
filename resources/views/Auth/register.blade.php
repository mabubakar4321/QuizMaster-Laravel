<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | QuizVerse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts & Bootstrap -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(120deg, #8e2de2, #4a00e0);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Inter', sans-serif;
        }

        .register-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            width: 100%;
            max-width: 420px;
            color: white;
            animation: floatUp 1s ease-out;
        }

        @keyframes floatUp {
            from {
                transform: translateY(40px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .register-card h2 {
            font-weight: 600;
            margin-bottom: 25px;
            text-align: center;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.05);
            border: none;
            border-bottom: 1px solid rgba(255,255,255,0.3);
            border-radius: 0;
            color: white;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #81ecec;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .btn-custom {
            background-color: #81ecec;
            color: #000;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #74b9ff;
            transform: scale(1.05);
        }

        .already {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .already a {
            color: #81ecec;
            text-decoration: none;
        }

        .already a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="register-card">
    <h2>Create Your QuizVerse Account</h2>

    <form method="POST" action="{{ url('/registerdata') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input id="name" type="text" class="form-control" name="name" required autofocus>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input id="email" type="email" class="form-control" name="email" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-custom">Register</button>
        </div>

        <div class="already mt-3">
            Already have an account? <a href="{{ url('login') }}">Login</a>
        </div>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- SweetAlert Messages -->
@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '{{ session('success') }}',
        confirmButtonColor: '#81ecec'
    });
</script>
@endif

@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: '{{ session('error') }}',
        confirmButtonColor: '#81ecec'
    });
</script>
@endif

</body>
</html>
