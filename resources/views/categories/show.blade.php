@extends('layouts/main')

@section('content')
    <h3>Category: {{ $category->name }}</h3>

    <p>all books:</p>
    <ul>
        @foreach($category->books as $book)
            <li>
                <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
