<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Book project</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    @include('common/header')

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button>Logout</button>
    </form>

    @if(Auth::check())
        <h1>Hello, {{ Auth::user()->name }}</h1>
        {{ Auth::id() }}
    @else
        <h2>I can greet you if you log in</h2>
    @endif

    @include('common/errors')

    @yield('content')
</body>
</html>
