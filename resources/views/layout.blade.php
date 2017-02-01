<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>We are learning laravel</h1>
    <ul>
        <li><a href="/contacts">Contacts</a></li>
        <li><a href="/about-us">About us</a></li>
        <li><a href="/tasks">Tasks</a></li>
    </ul>
    <br>
        <div class = "content">
            <hr>
            @yield('content')
            <hr>
        </div>
    <br>
    <div>I am footer!</div>
</body>
</html>