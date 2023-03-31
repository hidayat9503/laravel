@extends('layouts.main')

@section('container')
<h1>Halaman {{ $title }}</h1>
<article>
    <h3>{{ $post->title }}</h3>
    <h5>By. Taufik Hidayat in <a href="/categories/{{ $post->categories->slug }}"> {{ $post->categories->name }}</a></h5>
    {!! $post->body !!}
    <a href="/posts">Back Post</a>
</article>
@endsection