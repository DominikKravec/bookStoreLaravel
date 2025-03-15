<x-layout>
    <form action="{{route('books.store')}}" method='post'>
        @csrf

        <!-- validation errors -->
        @if($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach ($errors->all() as $error)
                    <li class=" my-2 text-red-500">
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        @endif


        <label for="title">Title</label>
        <input
            type="text" 
            name="title"
            placeholder="Lord of the rings"
            required
        >
        
        <label> Price </label>
        <input 
            type="decimal" 
            name="price"
            placeholder="15.50"
            required
        >

        <label for="author">Author</label>
        <select
            id="author_id"
            name="author_id"
            required
        >

            @foreach ($authors as $author)
                <option value="{{$author->id}}" {{ $author->id == old('author_id') ? 'selected' : ''}}> {{$author->fname . " " . $author->lname}} </option>
            @endforeach

        </select>

        <label for="genre">Genre</label>
        <select
            id="genre"
            name="genre"
            required
        >

            @foreach ($genres as $genre)
                <option value="{{$genre}}"> {{$genre}} </option>
            @endforeach

        </select>

        <label for="amount">Stored amount</label>
        <input 
            type="number" 
            name="storedAmount" 
            required
            placeholder="10"
        >

        <input type="submit" value="Add book" class=" bg-red-400 text-gray-900 font-bold hover:opacity-60">

    </form>
</x-layout>