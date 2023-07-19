<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="card">
        <h2>Halaman Login</h2>
        @if (session('message'))
            <div>{{ session('message') }}</div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div>
                <button type="submit" class="button">Login</button>
            </div>
        </form>
        <div>
            <p>Belum punya akun? <a href="{{ route('register') }}">Daftar disini</a></p>
        </div>
    </div>

    <script>
        // Tambahkan animasi saat hover pada button
        const button = document.querySelector('.button');

        button.addEventListener('mouseover', () => {
            button.style.transform = 'scale(1.02)';
        });

        button.addEventListener('mouseout', () => {
            button.style.transform = 'scale(1)';
        });
    </script>
</body>
</html>
