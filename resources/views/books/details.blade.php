<x-layout>

    <section class="book-details">
        <h1 class="text-6xl">{{$book->title}}</h1>
        <div>Genre: 
            <span class="text-xl">
                {{$book->genre}}
            </span>

        </div>
        <div class="">Price: 
            <span class="text-xl">{{$book->price}}$</span>
        </div>
        <div>Available amount: {{$book->storedAmount}}</div>
        <div class=" flex-col gap-10 bg-gray-800 rounded-xl px-10 py-5 text-white mt-5">
            <h2 class="text-2xl opacity-80">About author</h2>
            <div class="text-4xl">{{$book->author->fname . " " . $book->author->lname}}</div>
            <div class="mb-10">Country: {{$book->author->country}}</div>
            <a href="{{route('author.details', $book->author->id)}}" class="bg-red-500 text-white p-3 rounded-xl text-lg hover:opacity-80">Authors page</a>
        </div>
    </section>

</x-layout>