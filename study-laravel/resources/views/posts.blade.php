@extends('layouts.main')

{{-- @dd($posts) => dump and die kek var_dump  --}}

@section('container')

    @foreach ($posts as $post)
        <article class = "mb-5">
            <h3>
                <a href="posts/{{ $post["slug"] }}"> {{ $post["title"] }}</a>
            </h3>
            <h4> {{ $post["author"] }}</h4>
            <p> {{ $post["body"] }}</p>
        </article>
    @endforeach

@endsection