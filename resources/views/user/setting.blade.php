<!DOCTYPE html>
<html>
<head>
    <title>Halaman Profil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap");
        body {
            font-family: 'Roboto', sans-serif;
        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 250px;
            background: linear-gradient(to bottom, #ff8800, #ff5500);
            color: #fff;
            transition: all 0.3s ease;
            z-index: 1;
        }

        .sidebar.hide {
            width: 60px;
        }

        .sidebar .brand {
            padding: 20px;
            text-align: center;
            font-size: large;
            transition: all 0.3s ease;
            font-weight: 700;
        }

        .sidebar.hide .brand {
            display: none;
        }

        .sidebar .brand .logo {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            display: inline-block;
        }

        .sidebar .brand .brand-text {
            display: inline-block;
            vertical-align: middle;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .sidebar li {
            margin-bottom: 15px;
            text-align: center;
            margin-top: 30px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            transition: all 0.3s ease;
            border-radius: 3px;
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .sidebar .toggle-button {
            background-color: rgba(255, 255, 255, 0.2);
            border: none;
            outline: none;
            cursor: pointer;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 100%;
            padding: 15px;
            transition: all 0.3s ease;
        }

        .sidebar .toggle-button .arrow {
            color: #fff;
        }

        .sidebar.hide a span {
            display: none;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s ease;
        }

        .content.hide {
            margin-left: 60px;
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
            margin-bottom: 20px;
        }

        .profile-card p {
            margin-bottom: 10px;
        }

        .profile-card hr {
            margin: 20px 0;
            border: 0;
            border-top: 1px solid #ccc;
        }

        .profile-card form {
            margin-bottom: 20px;
        }

        .profile-card label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .profile-card input[type="text"],
        .profile-card input[type="email"],
        .profile-card input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .profile-card .warning {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

        .profile-card button {
            background-color: #ff8800;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        .profile-card button:hover {
            background-color: #ff5500;
        }

        .change-password-form {
            display: none;
            margin-top: 20px;
        }

        .change-password-form.show {
            display: block;
        }

        .change-password-form h3 {
            margin-bottom: 10px;
        }
    </style>
    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            const content = document.querySelector('.content');
            const profileCard = document.querySelector('.profile-card');
            sidebar.classList.toggle('hide');
            content.classList.toggle('hide');
            profileCard.classList.toggle('hide');
        }

        function toggleChangePassword() {
            const changePasswordForm = document.querySelector('.change-password-form');
            changePasswordForm.classList.toggle('show');
        }

        function validatePassword() {
            const newPassword = document.getElementById('new_password').value;
            const confirmPassword = document.getElementById('new_password_confirmation').value;
            const warning = document.getElementById('password-warning');
            
            if (newPassword !== confirmPassword) {
                warning.textContent = 'Password tidak sesuai.';
            } else {
                warning.textContent = '';
            }
        }
    </script>
</head>
<body>
    <div class="sidebar">
        <div class="brand">
            <!-- <img class="logo" src="logo.png" alt="Logo"> -->
            <span class="brand-text">TITIK BANJIR</span>
        </div>
        <ul>
            <li><a href="/home"><i class="fas fa-home"></i><span>Home</span></a></li>
            <li><a href="/profile"><i class="fas fa-user"></i><span>Profile</span></a></li>
            <li><a href="/setting"><i class="fas fa-cog"></i><span>Setting</span></a></li>
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i><span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
        <button class="toggle-button" onclick="toggleSidebar()">
            <i class="fas fa-chevron-left arrow"></i>
        </button>
    </div>
    <div class="content">
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
                <p>
                    <button type="button" onclick="toggleChangePassword()">Ubah Password</button>
                </p>
            <form method="POST" action="{{ route('updatePassword') }}">
                @csrf
                <div class="change-password-form">
                    <hr>
                    <h3>Ganti Password</h3>
                    <p>
                        <label for="current_password">Password Saat Ini:</label>
                        <input type="password" id="current_password" name="current_password" required>
                    </p>
                    <p>
                        <label for="new_password">Password Baru:</label>
                        <input type="password" id="new_password" name="new_password" onkeyup="validatePassword()" required>
                    </p>
                    <p>
                        <label for="new_password_confirmation">Konfirmasi Password Baru:</label>
                        <input type="password" id="new_password_confirmation" name="new_password_confirmation" onkeyup="validatePassword()" required>
                        <span class="warning" id="password-warning"></span>
                    </p>
                    <p>
                    <button type="submit">Simpan</button>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
