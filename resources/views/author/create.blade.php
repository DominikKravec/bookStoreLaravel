<x-layout>

    <form action="{{route('author.store')}}" method="post">
        @csrf

        @if($errors->any())
            <ul class="px-4 py-2 bg-red-100 mb-2 rounded-lg">
                @foreach ($errors->all() as $error)
                    <li class=" my-2 text-red-500">
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        @endif
        
        <label>First name</label>
        <input type="text" name="fname" placeholder="John">
        <label>Last name</label>
        <input type="text" name="lname" placeholder="Doe">
        <label>Country</label>
        <input type="text" name="country" placeholder="USA">
        
        <input type="submit" value="Add author" class=" bg-red-400 text-gray-900 font-bold hover:opacity-60">

    </form>

</x-layout>