<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
<p><a href="table">Товары</a></p>
@if (!is_null($user))
<p><a href="persons">Персоны</a></p>
@endif
<p>-----------------------------</p>
@if (is_null($user))
<p><a href="user/login">Войти</a></p>
<p><a href="user/register">Зарегестрироваться</a></p>
@else
<p>Вы вошли как {{ $user -> name }}</p>
<p><a href="user/logout">Выйти</a></p>
@endif
</body>
</html>
