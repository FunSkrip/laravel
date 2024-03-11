<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Links</title>
    </head>
    <body>
        @foreach ($links as $link)
            <a href="http://{{ $link['href'] }}">{{ $link['text'] }}</a>
            <br>
        @endforeach
    </body>
</html>
