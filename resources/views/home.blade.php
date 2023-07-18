<!DOCTYPE html>
<html>
<head>
    <title>Halaman Home</title>
    <style>
        /* CSS untuk styling navbar */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: linear-gradient(45deg, #ff8c00, #ff4500);
            color: #fff;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 20px;
        }

        .navbar .user-dropdown {
            position: relative;
        }

        .navbar .user-dropdown button {
            background: none;
            border: none;
            color: #fff;
            cursor: pointer;
            font-size: 18px;
            margin-right: 10px;
            font-weight: 700;
            text-decoration: none;
            font-family: Arial, sans-serif;
            outline: none;
        }

        .navbar .user-dropdown-content {
            display: none;
            position: absolute;
            top: 40px;
            right: 0;
            padding: 20px 10px 20px 10px;
            background-color: #f9f9f9;
            min-width: 150px;
            border-radius:10px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            
        }

        .navbar .user-dropdown:hover .user-dropdown-content {
            display: block;
        }

        .navbar .user-dropdown-content a {
            display: block;
            padding: 10px 20px;
            color: #333;
            text-decoration: none;
            font-family: Arial, sans-serif;
            cursor: pointer;
        }

        .navbar .user-dropdown-content a:hover {
            background-color: #ddd;
        }

        .content {
            margin: 20px;

        }

        .content-container {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
        }

        .content h2 {
            font-size: 24px;
        }

        .content button,
        .content p {
            margin-top: 10px;
        }

        .content form {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="user-dropdown">
            <button onclick="toggleDropdown()">{{ auth()->user()->name }}</button>
            <div class="user-dropdown-content" id="dropdown-content">
                <a href="/profile">Profile</a>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </div>
        </div>
    </div>
    <div class="content">
    <div class="content-container">
            <h2>Halaman Home</h2>
        </div>


        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>

        <script>
            function toggleDropdown() {
                var dropdownContent = document.getElementById("dropdown-content");
                dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
            }
        </script>
    </div>
</body>
</html>