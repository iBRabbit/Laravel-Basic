@extends('layouts.main')

@section('container')
    
    {{-- @dd($post); --}}

    <article>
        <h2>{{ $post -> title }}</h2>
        {!! $post -> body !!}
    </article>

    <p> By : Felix | <a href="/categories/{{ $post -> category -> slug }}">Category : {{$post -> category -> name}}</a></p>

    <a href="/blog">Back to posts</a>

@endsection