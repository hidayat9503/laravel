@extends('layouts.main')

@section('container')
<h1 class="bm-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center">
  <div class="col-md-6">
    <form action="/posts">
      @if (request('categories'))
          <input type="hidden" name="categories" value="{{ request('categories') }}">
      @endif
      @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
        <button class="btn btn-danger" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

@if ($posts->count())
<div class="card mb-3 justify-content-center">
  @if ($posts[0]->image)
  <div style="max-height: 350px; overflow: hidden;">
    <img src="{{ asset('storage/'. $posts[0]->image) }}" alt="{{ $posts[0]->categories->name }}" class="img-fluid">
  </div>
  @else
  <div style="max-height: 350px; overflow: hidden;">
    <img style="overflow: hidden;" src="https://source.unsplash.com/random/1048×400?{{ $posts[0]->categories->name }}" class="card-img-top" alt="{{ $posts[0]->categories->name }}">
  </div>
  @endif
    <div class="card-body text-center">
        <h3 class="card-title"> <a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
        <p>
            <small>
                By. <a class="text-decoration-none" href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/posts?categories={{ $posts[0]->categories->slug }}"> {{ $posts[0]->categories->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more</a> 
    </div>
  </div>
  <br>
  <div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
            <div class="col-md-4">
                <div class="card mb-2 mt-2">
                  <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.6)"><a class="text-decoration-none text-white" href="/posts?categories={{ $post->categories->slug }}">{{ $post->categories->name }}</a></div>
                  @if ($post->image)
                  <img style="max-height: 250px; overflow: hidden;" src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->categories->name }}" class="img-fluid">
                  @else
                  <img style="max-height: 250px; overflow: hidden;" src="https://source.unsplash.com/random/500×400?{{ $post->categories->name }}" class="card-img-top" alt="{{ $post->categories->name }}">
                  @endif
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p class="text-muted"><small>By. <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}"> {{ $post->author->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
</div>

@else
  <p class="text-center fs-4">No Posts Found</p>
@endif

{{ $posts->links() }}
@endsection