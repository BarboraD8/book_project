@extends('layouts/main')

@section('content')
    @if (Session::has('success_message'))

        <div class="alert alert-success">
            {{ Session::get('success_message') }}
        </div>

    @endif

    <h3>list of authors:</h3>
    <ul>
        @foreach ($authors as $author)
            <li>
                <a href="/authors/{{ $author->id }}">{{ $author->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
