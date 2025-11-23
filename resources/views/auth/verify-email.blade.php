<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verifikasi Email</title>
</head>
<body>
    <h1>Verifikasi Email Kamu</h1>

    @if (session('message'))
        <p style="color:green;">{{ session('message') }}</p>
    @endif

    <p>
        Kami sudah mengirimkan link verifikasi ke email kamu.
        Silakan cek inbox (atau folder spam).
    </p>

    <p>
        Kalau belum menerima email,
        kamu bisa kirim ulang dengan klik tombol di bawah:
    </p>

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit">Kirim Ulang Email Verifikasi</button>
    </form>

    <form method="POST" action="{{ route('logout') }}" style="margin-top: 20px;">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
