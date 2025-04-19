@props([
    'id',
    'title',
    'price',
    'genre',
    'author',
    'empty' => false
])

<div class="card flex justify-between items-center {{$empty ? 'empty' : ''}}">
    <span class="flex gap-5">
        <span>{{$title}}</span>
        <span class="text-lg text-gray-500">by: {{$author}}</span>
    </span>
    <span class="flex  gap-3 items-center">
        <span class="text-lg text-gray-600">{{$genre}}</span>
        <span>{{$price}}$</span>
        <a href="{{route('books.details', $id)}}" class="bg-red-400 text-white p-3 rounded-xl text-lg hover:bg-red-500">Details</a>
    </span>
</div>