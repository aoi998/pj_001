<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header style="background-color: #1b72c9;">
        <h1>インスタグラム風アプリ</h1>
    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer style="background-color: #1b72c9;">
        <p>© 2023 インスタグラム風アプリ</p>
    </footer>
</body>
</html>