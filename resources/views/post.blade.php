@extends('layouts.main')

@section('container')
<h1>Halaman {{ $title }}</h1>
<article class="justify-content-center mt-5">
    <h3>{{ $post->title }}</h3>
    <h5>{{ $post->author }}</h5>
    {!! $post->body !!}
    <a href="/posts">Back Post</a>
</article>
@endsection