<x-layout>

    <h1>Available books</h1>

    <section class=' justify-center items-center w-full grid'>
        @foreach ($books as $book)
            <x-card 
                :title="$book->title"
                :author=" $book->author->fname . ' ' . $book->author->lname"
                :price="$book->price"    
                :genre="$book->genre"
                :index="$book->storedAmount == 0"
            >
            </x-card>
        @endforeach
    </section>

    {{$books->links()}}

</x-layout>