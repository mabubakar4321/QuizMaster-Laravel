<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QuizVerse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-weight: 600;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 15px 0;
            text-align: center;
            margin-top: 50px;
        }

        /* 🔴 Custom CSS for Logout Link */
        .logout-link {
            color: #ff4d4f !important;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .logout-link:hover {
            color: #dc3545 !important;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">QuizVerse</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link logout-link" href="{{ url('logout') }}">Logout</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            &copy; {{ date('Y') }} QuizVerse. All Rights Reserved.
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
