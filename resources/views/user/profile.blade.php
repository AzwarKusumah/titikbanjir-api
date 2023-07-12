<!DOCTYPE html>
<html>

<head>
    <title>Halaman Profil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
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
            border-radius: 50%;
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
            padding: 20px;
            max-width: 400px;
            transition: all 0.3s ease;
        }

        .profile-card.hide {
            margin-left: 0;
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
    </script>
</head>

<body>
    <div class="sidebar">
        <div class="brand">
            <!-- <img class="logo" src="logo.png" alt="Logo"> -->
            <span class="brand-text">Nama Aplikasi</span>
        </div>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i><span>Home</span></a></li>
            <li><a href="#"><i class="fas fa-user"></i><span>Profile</span></a></li>
            <li><a href="#"><i class="fas fa-cog"></i><span>Setting</span></a></li>
            <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
            <p>Nama: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
        </div>
    </div>
</body>

</html>