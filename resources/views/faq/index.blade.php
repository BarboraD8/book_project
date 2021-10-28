@extends('layouts/main')

@section('content')
    <h1>FAQ</h1>

    @if(Gate::allows('admin'))
    @else
    @endif

    @can('admin')
    @elsecan
    @endcan

    <div class="faqs">
        @foreach ($faqs as $faq)
            <div class="faqs__faq">
                <div class="faqs__question">Q: {{ $faq['Q'] }}</div>

                <div class="faqs__answer">A: {{ $faq['A'] }}</div>
            </div>
        @endforeach
    </div>
@endsection
