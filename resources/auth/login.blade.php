<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --main-blue: #044FA0;
            --main-lilac: #b39ddb;
            --main-bg: #f6f7fb;
        }
        body {
            background: var(--main-bg);
            font-family: 'Inter', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .login-container {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(4, 79, 160, 0.10);
            padding: 2.5rem 2.2rem 2rem 2.2rem;
            width: 100%;
            max-width: 370px;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        .login-title {
            color: var(--main-blue);
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-align: center;
            letter-spacing: 0.5px;
        }
        .form-group {
            margin-bottom: 1.1rem;
            display: flex;
            flex-direction: column;
            gap: 0.3rem;
        }
        label {
            color: #5c5c5c;
            font-size: 1rem;
            font-weight: 500;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 0.7rem 1rem;
            border: 1.5px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1rem;
            background: var(--main-bg);
            transition: border 0.2s, box-shadow 0.2s;
        }
        input[type="text"]:focus, input[type="password"]:focus {
            border: 1.5px solid var(--main-lilac);
            outline: none;
            box-shadow: 0 0 0 2px #ede7f6;
        }
        .btn-login {
            width: 100%;
            background: linear-gradient(90deg, var(--main-blue) 60%, var(--main-lilac) 100%);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 0.85rem 0;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            margin-top: 0.5rem;
            transition: background 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(4, 79, 160, 0.07);
        }
        .btn-login:hover {
            background: linear-gradient(90deg, #033a73 60%, #a084ca 100%);
            box-shadow: 0 4px 16px rgba(4, 79, 160, 0.13);
        }
        .error-message {
            color: #d32f2f;
            background: #ffeaea;
            border-radius: 8px;
            padding: 0.7rem 1rem;
            margin-bottom: 1.1rem;
            font-size: 1rem;
            text-align: center;
            border: 1px solid #ffcdd2;
            font-weight: 500;
        }
        @media (max-width: 480px) {
            .login-container {
                padding: 1.5rem 0.7rem 1.2rem 0.7rem;
                max-width: 98vw;
            }
            .login-title {
                font-size: 1.3rem;
            }
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
                <input type="text" id="username" name="username" required autofocus autocomplete="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required autocomplete="current-password">
            </div>
            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>
</body>
</html>
