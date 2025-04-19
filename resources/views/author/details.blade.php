<x-layout>

    <section class="w-[90vw]">
        <div class=" flex-col text-white mt-5">
            <h2 class="text-2xl opacity-80">About author</h2>
            <div class="text-6xl mt-5">{{$author->fname . " " . $author->lname}}</div>
            <div class="mb-10 mt-3">Country: {{$author->country}}</div>
        </div>

        <section>
            <h2 class="text-4xl text-white mb-5">Books by author</h2>

            @foreach ($author->books as $book)
                <x-card 
                :id="$book->id"
                :title="$book->title"
                :author=" $book->author->fname . ' ' . $book->author->lname"
                :price="$book->price"    
                :genre="$book->genre"
                :index="$book->storedAmount == 0"
                >
                </x-card>   
            @endforeach

        </section>



    </section>

</x-layout>