<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
        <link
    rel="icon"
    href="{{ asset ('img/icon/Logo.svg') }}"
    type="image/x-icon"
    />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            /* background: #d8d8d8 */
            /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Background decorative elements */
        .bg-decoration {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
            z-index: 1;
        }

        .bg-decoration:nth-child(1) {
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            top: 10%;
            left: 10%;
            animation: float 6s ease-in-out infinite;
        }

        .bg-decoration:nth-child(2) {
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.05);
            top: 70%;
            right: 15%;
            animation: float 8s ease-in-out infinite reverse;
        }

        .bg-decoration:nth-child(3) {
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.07);
            top: 20%;
            right: 30%;
            animation: float 7s ease-in-out infinite;
        }

        .bg-decoration:nth-child(4) {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.04);
            bottom: 20%;
            left: 20%;
            animation: float 5s ease-in-out infinite reverse;
        }

        /* Stars */
        .star {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            z-index: 1;
        }

        .star:nth-child(5) {
            top: 15%;
            left: 25%;
            animation: twinkle 3s ease-in-out infinite;
        }

        .star:nth-child(6) {
            top: 30%;
            right: 20%;
            animation: twinkle 2s ease-in-out infinite reverse;
        }

        .star:nth-child(7) {
            bottom: 25%;
            left: 15%;
            animation: twinkle 4s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        @keyframes twinkle {
            0%, 100% { opacity: 0.6; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.2); }
        }

        /* Main container */
        .login-container {
            background: rgba(30, 41, 69, 0.9);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            width: 400px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 10;
        }

        .logo {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo h1 {
            color: #ffffff;
            font-size: 32px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 16px 20px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            color: #ffffff;
            font-size: 16px;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.4);
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.1);
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.6);
            font-size: 14px;
        }

        .form-label {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            margin-bottom: 8px;
            display: block;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .login-btn {
            width: 100%;
            padding: 16px;
            background: #ffffff;
            color: #1e2945;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-top: 10px;
        }

        .login-btn:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .forgot-password {
            text-align: center;
            margin-top: 25px;
        }

        .forgot-password a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: color 0.3s ease;
        }

        .forgot-password a:hover {
            color: #ffffff;
        }

        /* Alert styles */
        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .alert-danger {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #fca5a5;
        }

        .alert-success {
            background: rgba(34, 197, 94, 0.1);
            border: 1px solid rgba(34, 197, 94, 0.3);
            color: #86efac;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .login-container {
                width: 90%;
                padding: 30px 20px;
            }

            .logo h1 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <!-- Background decorations -->
    <div class="bg-decoration"></div>
    <div class="bg-decoration"></div>
    <div class="bg-decoration"></div>
    <div class="bg-decoration"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>

    <div class="login-container">
        <div class="logo">
            <h1>Fintrack</h1>
        </div>

        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login.submit') }}">
            @csrf

            <div class="form-group">
                <label for="email" style="color: rgba(255, 255, 255, 0.8); font-size: 14px; margin-bottom: 8px; display: block; text-transform: uppercase; letter-spacing: 0.5px;">Alamat Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-input"
                    value="{{ old('email') }}"
                    required
                    autofocus
                >
            </div>

            <div class="form-group">
                <label for="password" style="color: rgba(255, 255, 255, 0.8); font-size: 14px; margin-bottom: 8px; display: block; text-transform: uppercase; letter-spacing: 0.5px;">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="form-input"
                    required
                >
            </div>

            <button type="submit" class="login-btn">
                Login
            </button>
        </form>
    </div>
</body>
</html>
