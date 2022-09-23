@extends('layouts.main')

@section('container')
    {{-- @dd($posts) --}}
    @foreach ($categories as $category)
        <article class = "mb-5">
            <h3>
                <a href="/posts?category={{ $category -> slug }}">{{ $category -> name }}</a>
            </h3>
            
        </article>
    @endforeach

@endsection 