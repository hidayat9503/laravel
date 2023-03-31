@extends('layouts.main')

@section('container')
<h1>Halaman {{ $title }}</h1>
<br>
@foreach ($posts as $post)
<article class="mb-5">
    <h3>{{ $post->title }}</h3>
    <p>By. Taufik Hidayat in <a class="text-decoration-none" href="/categories/{{ $post->categories->slug }}"> {{ $post->categories->name }}</a></p>
    <p>{{ $post->excerpt }}</p> 
    <p><a href="/posts/{{ $post->slug }}">Read more..</a></p>
</article>
@endforeach

@endsection