<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
</head>
<body>
<table>
    <tr>
        <th>#</th>
        <th>Название</th>
        <th>Описание</th>
        <th>Стоимость</th>
        <th>Количество</th>
        <th>ИТОГ</th>
        <th>Создано</th>
        <th>Обновленно</th>
        <th>Действие</th>
</tr>
@foreach ($items as $item )
<tr>
    <td>{{ $item -> id}}</td>
    <td>{{ $item -> fullname}}</td>
    <td>{{ $item -> description}}</td>
    <td>{{ $item -> cost}}</td>
    <td>{{ $item -> amount}}</td>
    <td>{{ $item -> GetAttributes()['cost'] * $item -> amount}}</td>
    <td>{{ $item -> created_at }}</td>
    <td>{{ $item -> updated_at }}</td>
    <td>
        <p><a href="{{ "table/del/{$item -> id}" }}">Удалить</a></p>
        <p><a href="{{ "table/add/{$item -> id}" }}">Изменить</a></p>
    </td>
</tr>
@endforeach
</table>
<p><a href="table/add">Добавить товар</a></p>
</body>
</html>
