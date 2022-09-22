@extends('layouts.main')

{{-- @dd($posts) => dump and die kek var_dump  --}}

@section('container')

    <h1>Category : {{ $title }}</h1>
    @foreach ($posts as $post)
        <article class = "mb-5">
            <h3>
                <a href="../posts/{{ $post -> slug }}"> {{ $post -> title }}</a>
            </h3>
            <p> {{ $post -> excerpt }}</p>
        </article>
    @endforeach

@endsection