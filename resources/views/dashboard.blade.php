<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>

    <p>Selamat datang, {{ auth()->user()->name }}!</p>
    <p>Email kamu: {{ auth()->user()->email }}</p>
    <p>Status email: 
        @if (auth()->user()->hasVerifiedEmail())
            ✅ Sudah terverifikasi
        @else
            ❌ Belum terverifikasi
        @endif
    </p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
