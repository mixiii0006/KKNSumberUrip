<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register - Sumber Urip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
        }
        .register-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-card {
            max-width: 900px;
            width: 100%;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 25px rgba(0,0,0,0.1);
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
        }
        .register-image {
            flex: 1 1 50%;
            background: url('{{ asset("assets/img/register-image.jpg") }}') center center/cover no-repeat;
            min-height: 400px;
        }
        .register-form {
            flex: 1 1 50%;
            padding: 40px;
        }
        .register-form h2 {
            margin-bottom: 30px;
            color: #348E38;
            font-weight: 700;
        }
        .form-control:focus {
            border-color: #348E38;
            box-shadow: 0 0 0 0.2rem rgba(52, 142, 56, 0.25);
        }
        .btn-register {
            background: linear-gradient(90deg, #2f7a2f, #348E38);
            border: none;
            color: white;
            font-weight: 600;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        .btn-register:hover {
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
    <div class="register-container">
        <div class="register-card">
            <div class="register-image"></div>
            <div class="register-form">
                <h2>Create Account</h2>
                <p>Register to get started!</p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus />
                        @error('name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required />
                        @error('username')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required />
                        @error('email')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" />
                        @error('password')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                    <button type="submit" class="btn btn-register">Register</button>
                </form>
                <p class="form-text mt-3">Already have an account? <a href="{{ route('login') }}">Login Here</a></p>
            </div>
        </div>
    </div>
</body>
</html>
