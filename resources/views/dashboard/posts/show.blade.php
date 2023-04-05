@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-lg-8">
            <h1>{{ $post->title }}</h1>
            <a class="btn btn-success" href="/dashboard/posts"><span data-feather="arrow-left"></span> Back Posts</a>
            <a class="btn btn-warning" href="/dashboard/posts"><span data-feather="edit"></span> Edit</a>
            <a class="btn btn-danger" href="/dashboard/posts"><span data-feather="x-circle"></span> Detele</a>
            <img src="https://source.unsplash.com/random/1200×200?{{ $post->categories->name }}" alt="{{ $post->categories->name }}" class="img-fluid mt-3" height="200">

            <article class="my-3">
                {!! $post->body !!}
            </article>
            <a class="text-decoration-none" href="/dashboard/posts"><< Back Posts</a>
        </div>
    </div>
</div>
@endsection