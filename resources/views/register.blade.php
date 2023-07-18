<!DOCTYPE html>
<html>
<head>
    <title>Halaman Profil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .profile-card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 500px;
            margin: 50px auto;
        }

        .profile-card h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .profile-card form {
            margin-bottom: 20px;
        }

        .profile-card label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .profile-card input[type="text"],
        .profile-card input[type="email"],
        .profile-card input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .profile-card button {
            padding: 10px 20px;
            background: linear-gradient(45deg, #ff8c00, #ff4500);
            color: #fff;
            border: none;
            cursor: pointer;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }

        .profile-card button:hover {
            background: linear-gradient(45deg, #ff4500, #ff8c00);
        }

        .profile-card hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #ccc;
        }

        .profile-card .success-message {
            color: green;
            font-size: 14px;
            margin-top: 10px;
        }

        .profile-card .error-message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <h2>Profil Pengguna</h2>
        <form method="POST" action="{{ route('updateProfile') }}">
            @csrf
            <p>
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" required>
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required>
            </p>
            <p>
                <button type="submit">Simpan</button>
            </p>
        </form>
        <hr>
        <h2>Ganti Password</h2>
        <form method="POST" action="{{ route('updatePassword') }}">
            @csrf
            <p>
                <label for="current_password">Password Saat Ini:</label>
                <input type="password" id="current_password" name="current_password" required>
            </p>
            <p>
                <label for="new_password">Password Bassru:</label>
                <input type="password" id="new_password" name="new_password" required>
            </p>
            <p>
                <label for="new_password_confirmation">Konfirmasi Password Baru:</label>
                <input type="password" id="new_password_confirmation" name="new_password_confirmation" required>
            </p>
            <p>
                <button type="submit">Simpan</button>
            </p>
        </form>
        @if (session('success'))
            <p class="success-message">{{ session('success') }}</p>
        @endif
        @if (session('error'))
            <p class="error-message">{{ session('error') }}</p>
        @endif
    </div>
</body>
</html>
