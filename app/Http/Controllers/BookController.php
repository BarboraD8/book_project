<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $searchString = $request->input('search');
        $books = Book::where('title', 'like', '%' . $searchString . '%')->get();

        return view('books/index', compact('books'));
    }

    public function create()
    {
        $book = new Book();
        $categories = Category::all();

        return view('books/form', compact('categories', 'book'));
    }

    public function store(Request $request)
    {
        $book = new Book();

        $this->validateForm($request);

        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->category_id = $request->input('category_id');

        $book->save();

        session()->flash('success_message', 'The book was successfully saved!');

        return redirect()->action('App\Http\Controllers\BookController@index');
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('books/show', compact('book'));
    }

    public function delete($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->action('App\Http\Controllers\BookController@index');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $categories = Category::all();

        return view('books/form', compact('categories', 'book'));
    }

    public function update($id, Request $request)
    {
        $book = Book::findOrFail($id);

        $this->validateForm($request);

        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->category_id = $request->input('category_id');

        $book->save();

        session()->flash('success_message', 'The book was successfully updated!');

        return redirect()->action('App\Http\Controllers\BookController@show', ['id' => $book->id]);
    }

    private function validateForm($request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'category_id' => 'required',
        ], [
            'title.required' => 'What?? the book does not have a title??',
            'title.min' => 'Title should have at least 3 letters',
        ]);
    }
}
