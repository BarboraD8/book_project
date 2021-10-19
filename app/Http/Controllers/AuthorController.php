<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        return view('authors/index', compact('authors'));
    }

    public function create()
    {
        return view('authors/create');
    }

    public function store(Request $request)
    {
        $author = new Author();
        $author->name = $request->input('name');
        $author->bio = $request->input('bio');
        $author->save();

        session()->flash('success_message', 'The author was successfully saved!');

        return redirect()->action('App\Http\Controllers\AuthorController@index');
    }

    public function show($id)
    {
        $author = Author::findOrFail($id);

        return view('authors/show', compact('author'));
    }}
