<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Users</title>
    </head>
    <body>
        <table style="border: 1px solid black">
            <caption>Пользователи</caption>
            <tr>
                <th style="border: 1px solid black">Имя</th>
                <th style="border: 1px solid black">Фамилия</th>
                <th style="border: 1px solid black">Статус</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td style="border: 1px solid black">{{ $user['name'] }}</td>
                <td style="border: 1px solid black">{{ $user['surname'] }}</td>
                    @if ($user['banned'])
                    <td style="color: white; border: 1px solid black; background-color: red">
                        Забанен
                    @else
                    <td style="color: white; border: 1px solid black; background-color: green">
                        Онлайн
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
        
        
    </body>
</html>
