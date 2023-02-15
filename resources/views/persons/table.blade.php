<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border ="1">
        <tr>
            <th>ФИО</th>
            <th>Дата рождения</th>
            <th>Место рождения</th>
            <th>Добавлен</th>
            <th>Изменен</th>
            <th>Действия</th>
    </tr>
    @foreach ($persons::all() as $person)
    <tr>
        <td>{{ $person -> name }}</td>
        <td>{{ $person -> birthdate }}</td>
        <td>{{ $person -> birthplace }}</td>
        <td>{{ $person -> created_at }}</td>
        <td>{{ $person -> updated_at }}</td>
        <td>
            <a href="{{ route('persons.edit', $person -> id) }}">Изменить</a>
            <a href="{{ route('persons.destroy', $person -> id) }}">Удалить</a>
        </td>
    </tr>
    @endforeach
    </table>
    <a href="{{ route('persons.edit') }}">Добавить персону</a>
</body>
</html>
