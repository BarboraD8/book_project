@extends('layouts/main')

@section('content')
    <h3>Detail of book:</h3>

    <h2>{{ $book->title }}</h2>
    <p>category: <a href="/categories/{{ $book->category->id }}">{{ $book->category->name }}</a></p>
    <p>published at: {{ $book->publishedAt }}</p>
    <p>description: {{ $book->description }}</p>

    <form action="/books/{{ $book->id }}" method="post">
        @csrf
        @method('delete')
{{--        <input type="hidden" name="_method" value="delete">--}}

        <input type="submit" value="Delete"/>
    </form>

@endsection
