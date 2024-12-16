<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            background-color: #f9f3e9;
            padding: 30px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2rem;
            color: #222;
            margin-bottom: 20px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 20px 0;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e0d4bf;
            border: none;
            color: #333;
            font-size: 1rem;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #d4c3a6;
        }

        .footer {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #555;
        }

        .footer a {
            color: #0066cc;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang</h1>
        <div class="button-container">
            <a href="{{ route('register') }}" class="button">Daftar</a>
            <a href="{{ route('login') }}" class="button">Login</a>
        </div>
        <div class="footer">
            Created by <strong>Sofiatul Ulya</strong>, <span style="color: orange;">MI22A</span>, 
            <a href="tel:2257401057">2257401057</a>
        </div>
    </div>
</body>
</html>
