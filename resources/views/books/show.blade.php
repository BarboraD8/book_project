@extends('layouts/main')

@section('content')
    <h3>Detail of book:</h3>

    <h2>{{ $book->title }}</h2>

    <p>
        author(s):
        @foreach($book->authors as $author)
            <a href="/authors/{{ $author->id }}">{{ $author->name }}</a>,
        @endforeach
    </p>
    <p>
        category:
        <a href="/categories/{{ $book->category->id }}">{{ $book->category->name }}</a>
    </p>
    <p>published at: {{ $book->publishedAt }}</p>
    <p>description: {{ $book->description }}</p>
    
    <img src="/images/{{ $book->image }}">

    <form action="/books/{{ $book->id }}" method="post">
        @csrf
        @method('delete')

        <input type="submit" value="Delete"/>
    </form>
    <a href="/books/{{ $book->id }}/edit">Edit</a>

@endsection
