<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: #f6f7fb;
            font-family: 'Inter', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(4, 79, 160, 0.08);
            padding: 2.5rem 2rem 2rem 2rem;
            width: 100%;
            max-width: 370px;
        }
        .login-title {
            color: #044FA0;
            font-size: 1.7rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .form-group {
            margin-bottom: 1.2rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #6d6d6d;
            font-size: 1rem;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 0.7rem 1rem;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            background: #f6f7fb;
            transition: border 0.2s;
        }
        input[type="text"]:focus, input[type="password"]:focus {
            border: 1.5px solid #b39ddb;
            outline: none;
        }
        .btn-login {
            width: 100%;
            background: linear-gradient(90deg, #044FA0 60%, #b39ddb 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 0.8rem 0;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            margin-top: 0.5rem;
            transition: background 0.2s;
        }
        .btn-login:hover {
            background: linear-gradient(90deg, #033a73 60%, #a084ca 100%);
        }
        .error-message {
            color: #d32f2f;
            background: #ffeaea;
            border-radius: 6px;
            padding: 0.5rem 1rem;
            margin-bottom: 1rem;
            font-size: 0.98rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-title">Login</div>
        @if(session('error'))
            <div class="error-message">{{ session('error') }}</div>
        @endif
        <form method="POST" action="{{ route('login.process') }}">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>
</body>
</html>
