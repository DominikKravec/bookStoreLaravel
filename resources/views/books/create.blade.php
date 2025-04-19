<x-layout>
    <form action="{{isset($book) ? route('books.update') : route('books.store')}}" method='post'>
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

        @if(isset($book))
            <input type="hidden" name="id" value="{{$book->id}}">
        @endif

        <label for="title">Title</label>
        <input
            type="text" 
            name="title"
            placeholder="Lord of the rings"
            value="{{isset($book) ? $book->title : ''}}"
            required
        >
        
        <label> Price </label>
        <input 
            type="decimal" 
            name="price"
            placeholder="15.50"
            value="{{isset($book) ? $book->price : ''}}"
            required
        >

        <label for="author">Author</label>
        <select
            id="author_id"
            name="author_id"
            required
        >

            @foreach ($authors as $author)
                <option value="{{$author->id}}" {{isset($book) && $author->id == $book->author->id ? 'selected' : ''}} {{ $author->id == old('author_id') ? 'selected' : ''}}> {{$author->fname . " " . $author->lname}} </option>
            @endforeach

        </select>

        <label for="genre">Genre</label>
        <select
            id="genre"
            name="genre"
            required
        >

            @foreach ($genres as $genre)
                <option value="{{$genre}}" {{isset($book) && $genre == $book->genre ? 'selected' : ''}}> {{$genre}} </option>
            @endforeach

        </select>

        <label for="amount">Stored amount</label>
        <input 
            type="number" 
            name="storedAmount" 
            value="{{isset($book) ? $book->storedAmount : ''}}"
            required
            placeholder="10"
        >

        <input type="submit" value="{{isset($book) ? 'Update book' : 'Add book'}}" class=" bg-red-400 text-gray-900 font-bold hover:opacity-60">

    </form>
</x-layout>