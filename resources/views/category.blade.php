@extends('layouts.main')

@section('container')
<h1>Post Category : {{ $category }}</h1>
<br>
@foreach ($posts as $post)
<article class="mb-5">
    <h3><a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>
    <h5>By. <a class="text-decoration-none" href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a></h5>
    <p>{{ $post->excerpt }}</p> 
</article>
@endforeach

@endsection