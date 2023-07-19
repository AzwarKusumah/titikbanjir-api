<!DOCTYPE html>
<html>
<head>
    <title>Halaman Registrasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="card">
        <h2>Halaman Registrasi</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required autofocus>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div>
                <button type="submit" class="button">Daftar</button>
            </div>
        </form>
        <div>
            <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk disini</a></p>
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
