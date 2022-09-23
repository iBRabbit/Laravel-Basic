@extends('layouts.main')

{{-- @dd($posts) => dump and die kek var_dump  --}}

@section('container')

    @foreach ($posts as $post)
        <article class = "mb-5 border-bottom pb-3">
            <h3>
                <a href="/posts/{{ $post -> slug }}" class="text-decoration-none"> {{ $post -> title }}</a>
            </h3>
            

            <p>By : <a href="/authors/{{ $post -> author -> username}}" class="text-decoration-none"> {{ $post -> author -> name }}</a> | <a href="/categories/{{ $post -> category -> slug }}" class="text-decoration-none">Category : {{$post -> category -> name}}</a></p>      

            <p> {{ $post -> excerpt }}</p>

            <a href="posts/{{ $post -> slug }}" class = "text-decoration-none">Read more...</a>
        </article>
    @endforeach

@endsection