<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        @csrf
        <p><input type="email" name="form[email]" placeholder="E-mail" required=""></p>
        <p><input type="password" name="form[password]" placeholder="Введите пароль..." required=""></p>
        <p><input type="text" name="form[name]" placeholder="Введите имя" required=""></p>
        <p><input type="submit" value="Зарегестрироваться"></p>
    </form>
</body>
</html>
