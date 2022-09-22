@extends('layouts.main')

@section('container')

    <h1>Category : {{ $title }}</h1>
    @foreach ($posts as $post)
        <article class = "mb-5 border-bottom">
            <h3>
                <a href="../posts/{{ $post -> slug }}" class="text-decoration-none"> {{ $post -> title }}</a>
            </h3>
            <p> {{ $post -> excerpt }}</p>
        </article>
    @endforeach

@endsection