<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/resources/css/style.css">
        <title>Employees</title>
    </head>
    <body>
        <p> 
        <table>
            <caption style="font-weight: bold;">Задание {{$Num}} @if(isset($Num_2)) и {{$Num_2}}@endif</caption>
            <tr>
                <th>Id</th>
                <th>Имя</th>
                <th>Дата рождение</th>
                <th>Должность</th>
                <th>Зарплата</th>
            </tr>
            @if (isset($employees_2))
            @foreach ($employees_2 as $employ)
            <tr>
                <td>{{$employ -> id}}</td>
                <td>{{$employ -> name}}</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
            @else
            @if (isset($sum1))
            @php
                $counter = 0;   
            @endphp
            @foreach ($employees as $employ)
            <tr>
                <td>{{$employ -> id}}</td>
                <td>{{$employ -> name}}</td>
                <td>{{$employ -> birthday}}</td>
                <td>{{$employ -> position}}</td>
                <td>{{$employ -> salary}}</td>
            </tr>
            @php
                $counter++;
            @endphp
            @if ($counter % 2 == 0)
            <tr>
                <td colspan="3"></td>
                <td>Сум. зп. по должности:</td>
                <td>@if ($counter == 2)
                    {{$sum1}}
                @elseif ($counter == 4)
                    {{$sum2}}
                @elseif ($counter == 6)
                    {{$sum3}}
                @endif</td>
            </tr>
            @endif
            @endforeach
            @else
            @foreach ($employees as $employ)
            <tr>
                <td>{{$employ -> id}}</td>
                <td>{{$employ -> name}}</td>
                <td>{{$employ -> birthday}}</td>
                <td>{{$employ -> position}}</td>
                <td>{{$employ -> salary}}</td>
            </tr>
            @endforeach
            @if (isset($salaryes))
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: right;">Итого сумм. зп.:</td>
                <td style="text-align: right;">{{$salaryes}}</td>
            </tr>
            @endif
            @endif
            @endif
        </table>
        </p>
    </body>
</html>