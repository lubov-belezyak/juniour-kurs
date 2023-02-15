<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="Post">
        @csrf
        <p><input value="@if(!is_null($item)){{ $item -> fullname}}@endif" type="text" name="item[fullname]" placeholder="Введите название" required=""></p>
        <p><textarea name="item[description]" placeholder="Введите описание" required="">@if(!is_null($item)){{ $item -> description}}@endif</textarea></p>
        <p><input value="@if(!is_null($item)){{ $item -> cost}}@endif" type="number" name="item[cost]" placeholder="Введите стоимость" required=""></p>
        <p><input value="@if(!is_null($item)){{ $item -> amount}}@endif" type="number" name="item[amount]" placeholder="Введите количество" required=""></p>
        <p><input type="submit" value="Добавить товар"></p>
    </form>
</body>
</html>
