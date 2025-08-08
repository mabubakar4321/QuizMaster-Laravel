<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QuizVerse | Ignite Your Mind</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts + Bootstrap -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(-45deg, #1a1a40, #0f0c29, #302b63, #24243e);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            font-family: 'Poppins', sans-serif;
            color: white;
            height: 100vh;
            overflow: hidden;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .hero-container {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 900;
            letter-spacing: 2px;
            position: relative;
            color: #fff;
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            0% {
                text-shadow: 0 0 10px #ffda77, 0 0 20px #ffda77, 0 0 30px #ffda77;
            }
            100% {
                text-shadow: 0 0 20px #fff176, 0 0 40px #fff176, 0 0 60px #fff176;
            }
        }

        .hero-subtitle {
            font-size: 1.3rem;
            color: #e0e0e0;
            max-width: 700px;
            margin-bottom: 40px;
            line-height: 1.7;
        }

        .highlight {
            color: #ffda77;
            font-weight: bold;
        }

        .hero-buttons a {
            display: inline-block;
            margin: 10px;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: bold;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
            font-size: 1rem;
        }

        .btn-register {
            background-color: #ffda77;
            color: #1a1a40;
            box-shadow: 0 0 10px #ffda77, 0 0 20px #ffda77;
        }

        .btn-register:hover {
            background-color: #fff176;
            box-shadow: 0 0 20px #fff176, 0 0 30px #fff176;
            transform: scale(1.05);
        }

        .btn-login {
            color: #fff;
            border: 2px solid #fff;
        }

        .btn-login:hover {
            background-color: #fff;
            color: #1a1a40;
            transform: scale(1.05);
        }

        /* Floating Blobs */
        .floating-shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            animation: floaty 8s ease-in-out infinite alternate;
            z-index: 1;
        }

        .blob1 {
            width: 200px;
            height: 200px;
            top: 10%;
            left: 5%;
        }

        .blob2 {
            width: 250px;
            height: 250px;
            bottom: 10%;
            right: 10%;
            animation-delay: 4s;
        }

        @keyframes floaty {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(45deg); }
            100% { transform: translateY(0px) rotate(90deg); }
        }
    </style>
</head>
<body>
    <!-- Animated Blobs -->
    <div class="floating-shape blob1"></div>
    <div class="floating-shape blob2"></div>

    <div class="hero-container">
        <h1 class="hero-title">QuizVerse</h1>
        <p class="hero-subtitle">
            The <span class="highlight">most exciting</span> way to challenge your brain. 
            Explore, Compete & Rise to the top.  
            <br><br>
            <span class="highlight">"If you're not registered, start now. If you are, let's play!"</span>
        </p>
        <div class="hero-buttons">
            <a href="{{url('/register') }} " class="btn-register">🚀 Register Now</a>
            <a href="{{url('login') }}" class="btn-login">🔑 Already Registered? Login</a>
        </div>
    </div>
</body>
</html>
