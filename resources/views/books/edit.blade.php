@extends('layouts/main')

@section('content')
    <h3>Register new book:</h3>

    <form action="/books/{{ $book->id }}" method="post">
        @csrf
        @method('put')

        <label for="title">Title:</label>
        {{ $book->title }}
        <input type="text" id="title" name="title" value="{{ $book->title }}" required/>
        <br>

        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $book->description }}</textarea>
        <br>

        <input type="submit" value="Save"/>
    </form>

@endsection
