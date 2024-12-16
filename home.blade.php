<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            text-align: center;
            margin-top: 10%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
        h1 {
            color: #2e2f42;
            font-size: 2em;
            margin: 0;
        }
        .nim {
            color: #4682b4;
            font-size: 1.2em;
            margin: 10px 0;
        }
        .class {
            color: #ff8c00;
            font-size: 1.5em;
            margin: 10px 0;
        }
        .logout-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #e0e0e0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            color: #333;
        }
        .logout-btn:hover {
            background-color: #dcdcdc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sofiatul Ulya</h1>
        <div class="nim">2257401057</div>
        <div class="class">MI22A</div>
        <form action="{{ route('logout') }}" method="GET">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
</body>
</html>
