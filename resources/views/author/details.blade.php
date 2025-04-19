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

        <div class="flex-col mt-5 gap-5 justify-center" >
            <form action="{{route('author.delete', $author->id)}}" method="POST" class=" bg-transparent p-0 py-0 mb-0 w-[10vw]">
                @csrf
                @method('DELETE')

                <input type="submit" value="Delete author" class="text-white bg-red-500 text-2xl rounded-xl py-2 px-10 justify-center items-center">
            </form>

            <a href="{{route('author.edit', $author->id)}}" class="text-white bg-red-500 text-2xl w-[90vw] rounded-xl py-2 px-10 justify-center items-center">Edit author information</a>
            
        </div>

    </section>

</x-layout>