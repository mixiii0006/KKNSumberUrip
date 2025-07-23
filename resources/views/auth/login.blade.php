<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - Sumber Urip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            max-width: 900px;
            width: 100%;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 25px rgba(0,0,0,0.1);
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
        }
        .login-image {
            flex: 1 1 50%;
            background: url('{{ asset("assets/img/beranda1.JPG") }}') center center/cover no-repeat;
            min-height: 400px;
        }
        .login-form {
            flex: 1 1 50%;
            padding: 40px;
        }
        .login-form h2 {
            margin-bottom: 30px;
            color: #348E38;
            font-weight: 700;
            text-align: center;
        }
        .login-form p {
            text-align: center;
        }
        .form-control:focus {
            border-color: #348E38;
            box-shadow: 0 0 0 0.2rem rgba(52, 142, 56, 0.25);
        }
        .btn-login {
            background: linear-gradient(90deg, #2f7a2f, #348E38);
            border: none;
            color: white;
            font-weight: 600;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        .btn-login:hover {
            background: linear-gradient(90deg, #1f4f1f, #246624);
        }
        .form-text a {
            color: #348E38;
            font-weight: 600;
            text-decoration: none;
        }
        .form-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-image"></div>
            <div class="login-form">
                <h2>Selamat Datang</h2>
                <p>Ayo masuk ke akunmu!</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus />
                        @error('username')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" />
                        @error('password')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember" />
                        <label class="form-check-label" for="remember">Ingat saya</label>
                        <a href="{{ route('password.request') }}" class="float-end">Lupa Password?</a>
                    </div>
                    <button type="submit" class="btn btn-login">Login</button>
                </form>
                <p class="form-text mt-3">Belum punya akun? <a href="{{ route('register') }}">Register Here</a></p>
            </div>
        </div>
    </div>
</body>
</html>
