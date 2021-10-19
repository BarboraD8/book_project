<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('books/index', compact('books'));
    }

    public function create()
    {
        return view('books/create');
    }

    public function store(Request $request)
    {
        $description = $request->input('description');

        $book = new Book();
        $book->title = $request->input('title');
        $book->description = $description;
        $book->save();

        session()->flash('success_message', 'The book was successfully saved!');

        return redirect()->action('App\Http\Controllers\BookController@index');
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('books/show', compact('book'));
    }
}
