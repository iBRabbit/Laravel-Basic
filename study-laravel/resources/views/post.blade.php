@extends('layouts.main')

@section('container')
    
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <h2 class="my-3">{{ $post -> title }}</h2>
            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid mb-3" alt="..." >
            <p> By : {{ $post -> author -> name }} | <a href="/categories/{{ $post -> category -> slug }}">Category : {{$post -> category -> name}}</a></p>       

            <article class = "my-3">
                {!! $post -> body !!}
            </article>
        
            <a href="/blog">Back to posts</a>
        </div>
    </div>
   </div>



@endsection