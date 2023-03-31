@extends('layouts.main')

@section('container')
<h1>Halaman {{ $title }}</h1>
<article class="mt-5 border-bottom">
    <h3>{{ $post->title }}</h3>
    <p>By. <a class="text-decoration-none" href="#">{{ $post->user->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->categories->slug }}"> {{ $post->categories->name }}</a></p>
    {!! $post->body !!}
    <a class="text-decoration-none" href="/posts">Back Post</a>
</article>
@endsection