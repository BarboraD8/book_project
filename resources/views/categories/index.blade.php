@extends('layouts/main')

@section('content')
    <h3>list of categories:</h3>
    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="/categories/{{ $category->id }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
