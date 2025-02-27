<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    public function index(){

        $books = Book::with('author')->orderBy('created_at', 'desc')->paginate(10);

        return view('books.index', ['books' => $books]);

    }
}
