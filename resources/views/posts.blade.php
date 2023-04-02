@extends('layouts.main')

@section('container')
<h1>{{ $title }}</h1>
@if ($posts->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/random/1048×400?{{ $posts[0]->categories->name }}" class="card-img-top" alt="..." width="1048" height="400">
    <div class="card-body text-center">
        <h3 class="card-title"> <a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
        <p>
            <small>
                By. <a class="text-decoration-none" href="/author/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $posts[0]->categories->slug }}"> {{ $posts[0]->categories->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more</a> 
    </div>
  </div>
@else
  <p class="text-center fs-4">No Posts Found</p>
@endif
<br>
<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
            <div class="col-md-4">
                <div class="card mb-2 mt-2">
                  <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.6)"><a class="text-decoration-none text-white" href="/categories/{{ $post->categories->slug }}">{{ $post->categories->name }}</a></div>
                    <img src="https://source.unsplash.com/random/500×400?{{ $post->categories->name }}" class="card-img-top" alt="{{ $post->categories->name }}" height="200">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p class="text-muted"><small><a class="text-decoration-none" href="/author/{{ $post->author->username }}"> {{ $post->author->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
</div>

@endsection