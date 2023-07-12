<!DOCTYPE html>
<html>
<head>
    <title>Halaman Register</title>
    <style>
        body {
            background: linear-gradient(135deg, #FF8C00, #FF4500);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .card {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 24px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            width: 400px;
            max-width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card h2 {
            margin-top: 0;
            color: #333333;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }

        .form-group {
            margin-bottom: 16px;
            width: 100%;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #666666;
            font-size: 14px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            background-color: #f4f4f4;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            background-color: #e0e0e0;
        }

        .button {
            background: linear-gradient(135deg, #ec008c, #fc6767);
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background: linear-gradient(135deg, #fc6767, #ec008c);
        }

        .button:active {
            transform: scale(0.98);
        }

        .button:disabled {
            background-color: #cccccc;
            cursor: not-allowed;
        }

        .button:disabled:hover {
            background-color: #cccccc;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Halaman Register</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="button">Register</button>
        </form>
        <div>
            <p>Sudah punya akun? <a href="{{ route('login') }}">Login disini</a></p>
        </div>
    </div>
</body>
</html>
