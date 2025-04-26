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
        <div class="flex items-center gap-10">
            @auth
                <h2 class=" text-2xl text-white">Welcome <span class="text-red-400 text-3xl">{{ Auth::user()->name }} </span></h2>
            @endauth
            <nav class="flex gap-3">
                @guest
                    <a href="{{ route("auth.login") }}" class="btn">Login</a>
                @endguest
    
                @auth
                    @if (Auth::user() && Auth::user()->role == 'admin')
                        <a href="{{ route('books.create') }}" class="btn">Add book</a>
                        <a href="{{ route('author.create') }}" class="btn">Add author</a> 
                    @endif

                    <form action="{{ route('auth.logout') }}" method="post" class="bg-transparent p-0 w-20">
                        @csrf
                        <button type="submit" class="btn">Logout</button>
                    </form>
                @endauth
            </nav>
        </div>
    </header>

    <main class=" py-5 px-10">
        {{$slot}}
    </main>
</body>
</html>