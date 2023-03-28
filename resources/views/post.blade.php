@extends('layouts.main')

@section('container')
<h1>Halaman {{ $title }}</h1>
<br>
<h3>{{ $post['title'] }}</h3>
<h5>{{ $post['author'] }}</h5>
<p>{{ $post['body'] }}</p>
<a href="/posts">Back Post</a>
@endsection