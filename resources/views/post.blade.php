@extends('layouts.main')

@section('container')
<h1>Halaman {{ $title }}</h1>
<article class="mt-5 border-bottom">
    <h3>{{ $post->title }}</h3>
    <p>By. Taufik Hidayat in <a href="/categories/{{ $post->categories->slug }}"> {{ $post->categories->name }}</a></p>
    {!! $post->body !!}
    <a href="/posts">Back Post</a>
</article>
@endsection