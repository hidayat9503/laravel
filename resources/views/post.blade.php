@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1>{{ $title }}</h1>
            <p>By. <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/posts?categories={{ $post->categories->slug }}"> {{ $post->categories->name }}</a></p>
            @if ($post->image)
            <div style="max-height: 350px; overflow: hidden;">
            <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->categories->name }}" class="img-fluid">
            </div>
            @else
            <div style="max-height: 350px; overflow: hidden;">
                <img src="https://source.unsplash.com/random/1200×200?{{ $post->categories->name }}" alt="{{ $post->categories->name }}" class="img-fluid">
            </div>
            @endif
            <article class="my-3">
                {!! $post->body !!}
            </article>
            <a class="text-decoration-none" href="/posts"><< Back Post</a>
        </div>
    </div>
</div>

@endsection