@extends('layouts.main')

@section('container')
<h1>Post Category : {{ $category }}</h1>
<br>
@foreach ($posts as $post)
<article class="mb-5">
    <h3><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>
    <h5>By. {{ $post->author }}</h5>
    <p>{{ $post->excerpt }}</p> 
</article>
@endforeach

@endsection