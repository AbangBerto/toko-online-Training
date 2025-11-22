<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Sneaker Store – Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-black via-gray-900 to-gray-800">

    <div class="w-full max-w-md bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-2xl border border-white/20">
        
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-white tracking-wide">Sneaker Empire</h1>
            <p class="text-gray-300 mt-1 text-sm">Masuk untuk melanjutkan</p>
        </div>

        <form>

            <div class="mb-5">
                <label class="block text-gray-200 mb-1 text-sm">Email</label>
                <input type="email"
                       class="w-full px-4 py-3 rounded-xl bg-white/20 text-white placeholder-gray-300 focus:ring-2 focus:ring-yellow-400 outline-none"
                       placeholder="example@mail.com">
            </div>

            <div class="mb-6">
                <label class="block text-gray-200 mb-1 text-sm">Password</label>
                <input type="password"
                       class="w-full px-4 py-3 rounded-xl bg-white/20 text-white placeholder-gray-300 focus:ring-2 focus:ring-yellow-400 outline-none"
                       placeholder="Masukkan password">
            </div>

            <button type="submit"
                    class="w-full py-3 rounded-xl bg-gradient-to-r from-yellow-500 to-yellow-300 font-bold text-black hover:opacity-90 transition">
                Login
            </button>

        </form>

        <p class="text-center text-gray-300 mt-6 text-sm">
            Belum punya akun?
            <a href="#" class="text-yellow-300 font-semibold hover:underline">Daftar sekarang</a>
        </p>

    </div>

</body>
</html>
