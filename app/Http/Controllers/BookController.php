<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    public function index(){

        $books = Book::with('author')->orderBy('created_at', 'desc')->paginate(10);

        return view('books.index', ['books' => $books]);

    }

    public function create(){

        $authors = Author::all();

        $genres = ['Fiction', 'Non Fiction', 'Biography', 'History', 'Science Fiction'];

        return view('books.create', ['authors' => $authors, 'genres' => $genres]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'price' => 'required|numeric',
            'storedAmount' => 'required|integer',
            'author_id' => 'required|integer|exists:authors,id'
        ]);

        Book::create($validated);

        return redirect()->route('books.index');

    }

    public function details($id) {
        
        $book = Book::with('author')->find($id);

        return view('books.details', ['book' => $book]);

    }

    public function delete($id){
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index');
    }

    public function edit($id){
        $book = Book::with('author')->find($id);

        $authors = Author::all();

        $genres = ['Fiction', 'Non Fiction', 'Biography', 'History', 'Science Fiction'];

        return view('books.create', ['book' => $book, 'authors' => $authors, 'genres' => $genres]);
    }

    public function update(Request $request){
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'price' => 'required|numeric',
            'storedAmount' => 'required|integer',
            'author_id' => 'required|integer|exists:authors,id'
        ]);
        
        $book = Book::findOrFail($request->id);
        $book->update($validated);

        return redirect(route('books.details', $book->id));
    }
}
