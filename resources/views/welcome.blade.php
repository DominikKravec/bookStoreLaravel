<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bookstore</title>
        @vite(['resources/css/app.css'])
    </head>
    <body class="text-center">
        <h1>Welcome to the bookstore page</h1>
        <a href="{{route('books.index')}}" class="btn"> See books </a>
    </body>
</html>
