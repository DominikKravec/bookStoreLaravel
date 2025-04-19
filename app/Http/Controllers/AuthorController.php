<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Author;

class AuthorController extends Controller
{
    public function details($id){
        $author = Author::with('books')->find($id);

        return view('author.details', ['author' => $author]);
    }

    public function create(){
        return view('author.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        Author::create($validated);
        return redirect()->route('books.index');
    }
}
