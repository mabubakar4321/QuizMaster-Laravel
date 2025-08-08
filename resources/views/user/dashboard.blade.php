<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #e0c3fc, #8ec5fc);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: #333;
        }

        .navbar {
            background-color: #2d2e83;
        }

        .navbar-brand {
            font-weight: 600;
            font-size: 1.5rem;
            animation: fadeIn 1s ease-in-out;
        }

        .nav-link {
            color: #fff !important;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #ffd700 !important;
        }

        .container h1 {
            font-size: 2.8rem;
            font-weight: 600;
            color: #2d2e83;
            animation: slideInDown 0.8s ease;
        }

        .btn-custom {
            background-color: #ff6b6b;
            color: #fff;
            padding: 12px 30px;
            font-size: 1.1rem;
            border: none;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        .btn-custom:hover {
            background-color: #e64848;
            transform: translateY(-2px);
        }

        footer {
            background-color: #2d2e83;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            margin-top: auto;
        }

        /* Animations */
        @keyframes fadeIn {
            0% { opacity: 0; transform: scale(0.95); }
            100% { opacity: 1; transform: scale(1); }
        }

        @keyframes slideInDown {
            0% { opacity: 0; transform: translateY(-30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm px-4">
        <a class="navbar-brand" href="#">QuizVerse</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('registers') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="{{ url('logout') }}">Logout</a>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container text-center mt-5">
        <h1 class="mb-4">Welcome to Your Quiz Dashboard</h1>
        <a href="{{ url('/quiz') }}" class="btn btn-custom shadow">Start Your Quiz</a>
    </div>

    <!-- Footer -->
    <footer>
        &copy; {{ date('Y') }} QuizVerse. All Rights Reserved.
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
