@extends('layouts/main')

@section('content')
    <h3>Category: {{ $category->name }}</h3>

    <p>all books:</p>
    <ul>
        @foreach($category->books as $book)
            <li>{{ $book->title }}</li>
        @endforeach
    </ul>
@endsection
