@extends('layouts.main')

@section('container')
<h1>{{ $title }}</h1>
<br>
@foreach ($posts as $post)
<article class="mb-5 border-bottom py-3">
    <h3>{{ $post->title }}</h3>
    <p>By. <a class="text-decoration-none" href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->categories->slug }}"> {{ $post->categories->name }}</a></p>
    <p>{{ $post->excerpt }} <br> <a class="text-decoration-none" href="/posts/{{ $post->slug }}">Read more..</a></p> 
    <small>Create: {{ $post->author->created_at }}</small>
    
</article>
@endforeach

@endsection