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

    public function delete($id){
        $author = Author::find($id);
        $author->delete();

        return redirect()->route('books.index');
    }

    public function edit($id){
        $author = Author::find($id);

        return view('author.create', ['author' => $author]);
    }

    public function update(Request $request){
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        $author = Author::find($request->id);
        $author->update($validated);

        return redirect(route('author.details', $author->id));

    }

}
