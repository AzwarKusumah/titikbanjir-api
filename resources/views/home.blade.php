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
            font-size: 16px;
            margin-right: 10px;
            text-decoration: none;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            outline: none;
        }

        .navbar .user-dropdown-content {
            display: none;
            position: absolute;
            top: 40px;
            right: 0;
            background-color: #f9f9f9;
            min-width: 160px;
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
        }

        .navbar .user-dropdown-content a:hover {
            background-color: #ddd;
        }

        /* CSS untuk mengatur konten halaman */
        .content {
            margin: 20px;
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

        .content .token-container {
            margin-top: 20px;
        }

        .content .token-container .copy-container {
            display: flex;
            align-items: center;
        }

        .content .token-container textarea {
            width: 400px;
            height: 30px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            resize: none;
            margin-right: 10px;
        }

        .content .token-container button {
            background: linear-gradient(45deg, #ff8c00, #ff4500);
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }

        .content .token-container button:hover {
            background: linear-gradient(45deg, #ff4500, #ff8c00);
        }

        .content button,
        .content a {
            padding: 10px 20px;
            background: linear-gradient(45deg, #ff8c00, #ff4500);
            color: #fff;
            border: none;
            cursor: pointer;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
        }

        .content button:hover,
        .content a:hover {
            background: linear-gradient(45deg, #ff4500, #ff8c00);
        }

        .token-container {
            display: none;
            margin-top: 20px;
        }

        .copy-success {
            margin-top: 10px;
            color: green;
            font-size: 14px;
        }

        /* Responsif untuk mode mobile */
        @media (max-width: 600px) {
            .content .token-container textarea {
                width: 100%;
                height: 60px;
            }

            .content h2 {
                font-size: 20px;
            }

            .content button,
            .content a {
                font-size: 14px;
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="user-dropdown">
            <button onclick="toggleDropdown()">{{ auth()->user()->name }}</button>
            <div class="user-dropdown-content" id="dropdown-content">
                <a href="/profile">Profil</a>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </div>
        </div>
    </div>
    <div class="content">
        <h2>Halaman Home</h2>
        <div class="token-buttons">
            <button onclick="showToken()">Tampilkan Token</button>
            <button onclick="hideToken()">Sembunyikan Token</button>
        </div>
        <div class="token-container">
            <div class="copy-container">
                <textarea id="token-textarea" readonly>{{ session('token') }}</textarea>
                <button class="copy-button" onclick="copyToken()">Copy</button>
            </div>
            <span class="copy-success" id="copy-success"></span>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>

        <script>
            function toggleDropdown() {
                var dropdownContent = document.getElementById("dropdown-content");
                dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
            }

            function showToken() {
                var tokenContainer = document.querySelector('.token-container');
                tokenContainer.style.display = 'block';
            }

            function hideToken() {
                var tokenContainer = document.querySelector('.token-container');
                tokenContainer.style.display = 'none';
            }

            function copyToken() {
                var tokenTextarea = document.getElementById('token-textarea');
                tokenTextarea.select();
                document.execCommand("copy");
                var copySuccess = document.getElementById('copy-success');
                copySuccess.textContent = 'Token telah disalin';
                setTimeout(function() {
                    copySuccess.textContent = '';
                }, 2000);
            }
        </script>
    </div>
</body>
</html>