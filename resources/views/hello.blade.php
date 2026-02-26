<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - PWL Praktikum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 2rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            max-width: 800px;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-top: 0;
            border-bottom: 3px solid #667eea;
            padding-bottom: 1rem;
        }
        .info {
            background-color: #f0f8ff;
            padding: 1rem;
            border-left: 4px solid #667eea;
            margin: 1.5rem 0;
            border-radius: 4px;
        }
        .nav {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid #ddd;
            text-align: center;
        }
        .nav a {
            display: inline-block;
            margin: 0.5rem;
            padding: 0.7rem 1.3rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        .nav a:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $title }}</h1>
        <div class="info">
            <p>Ini adalah halaman untuk praktikum routing, controller, dan view menggunakan Laravel.</p>
        </div>
        
        <div class="nav">
            <strong>Navigasi Praktikum:</strong><br><br>
            <a href="/">🏠 Home</a>
            <a href="/hello">👋 Hello</a>
            <a href="/world">🌍 World</a>
            <a href="/about">ℹ️ About</a>
            <a href="/user/Budi">👤 User Budi</a>
            <a href="/post/1">📄 Post 1</a>
            <a href="/user/Budi/post/5">📋 Budi Post 5</a>
        </div>
    </div>
</body>
</html>
