<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @if (is_null($person))
            Добавление новой персоны
        @else
            редактирование персоны
        @endif
    </title>
</head>
<body>
    <form method="POST">
        @csrf
        <input type="text" name="person[name]" value="{{ $person -> name ?? '' }}" required="" placeholder="Введите имя персоны..."><br><br>
        <input type="date" name="person[birthdate]" value="@if (!is_null($person)) {{ $person -> getAttributes()['birthdate'] ?? '' }} @endif" required="" placeholder="Введите дату рождения персоны..."><br><br>
        <textarea name="person[birthplace]" required="" placeholder="Введите место рождения персоны...">{{ $person -> birthplace ?? '' }}</textarea><br><br>
        <input type="submit" value="Сохранить">
    </form>
</body>
</html>
