<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Авторизация</h1>
    <form method="POST">
        @csrf
        <input type="email" required="" name="email" placeholder="Email">
        <input type="password" required="" name="password" placeholder="Password">
        <button type="submit">Вход</button>
</body>
</html>
