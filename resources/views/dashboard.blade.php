<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: #f6f7fb;
            font-family: 'Inter', sans-serif;
            margin: 0;
            min-height: 100vh;
        }
        .dashboard-container {
            max-width: 600px;
            margin: 60px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(4, 79, 160, 0.08);
            padding: 2.5rem 2rem 2rem 2rem;
            text-align: center;
        }
        .dashboard-title {
            color: #044FA0;
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 1.2rem;
        }
        .dashboard-greeting {
            color: #b39ddb;
            font-size: 1.3rem;
            margin-bottom: 0.7rem;
        }
        .dashboard-info {
            color: #444;
            font-size: 1.1rem;
        }
        .btn-logout {
            margin-top: 2rem;
            background: #044FA0;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 0.7rem 2.2rem;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        .btn-logout:hover {
            background: #033a73;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="dashboard-title">Dashboard</div>
        <div class="dashboard-greeting">Halo, {{ Auth::user()->nama ?? Auth::user()->username }}!</div>
        <div class="dashboard-info">Selamat datang di aplikasi pengaduan siswa.</div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn-logout">Logout</button>
        </form>
    </div>
</body>
</html>
