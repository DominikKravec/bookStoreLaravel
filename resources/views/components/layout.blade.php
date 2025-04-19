<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>
<body>

    <header class="flex justify-between items-center p-5">
        <h2 class=" text-4xl text-red-400"><a href="{{route('books.index')}}">Bookstore</a></h2>
        <div class="flex gap-3">
            <a href="{{ route('books.create') }}" class="btn">Add book</a>
            <a href="{{ route('author.create') }}" class="btn">Add author</a>
        </div>
    </header>

    <main class=" py-5 px-10">
        {{$slot}}
    </main>
</body>
</html>