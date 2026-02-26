<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - PWL Praktikum</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 2rem; background: linear-gradient(135deg, #eb2f96 0%, #c71585 100%); min-height: 100vh; display: flex; justify-content: center; align-items: center; }
        .container { max-width: 800px; background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 10px 40px rgba(0,0,0,0.2); }
        h1 { color: #333; text-align: center; margin-top: 0; border-bottom: 3px solid #eb2f96; padding-bottom: 1rem; }
        .highlight { background-color: #fff1f6; padding: 1.5rem; border-left: 4px solid #eb2f96; margin: 1.5rem 0; border-radius: 4px; }
        .parameter { font-weight: bold; color: #eb2f96; }
        .nav { margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #ddd; text-align: center; }
        .nav a { display: inline-block; margin: 0.5rem; padding: 0.7rem 1.3rem; background: linear-gradient(135deg, #eb2f96 0%, #c71585 100%); color: white; text-decoration: none; border-radius: 5px; transition: all 0.3s ease; }
        .nav a:hover { transform: translateY(-2px); box-shadow: 0 5px 15px rgba(235, 47, 150, 0.4); }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $title }}</h1>
        <div class="highlight">
            <p>{{ $message }}</p>
            <p>ID Post: <span class="parameter">{{ $id }}</span></p>
            <p>Ini adalah contoh route dengan parameter single dari Praktikum 3.</p>
        </div>
        <div class="nav">
            <a href="/">🏠 Home</a>
            <a href="/post/1">📄 Post 1</a>
            <a href="/post/2">📄 Post 2</a>
            <a href="/post/3">📄 Post 3</a>
        </div>
    </div>
</body>
</html>
