@extends('layouts.main')

@section('container')
<h1>{{ $title }}</h1>
<div class="container">
    <div class="row">
        @foreach ($categories as $cat)
            <div class="col-md-3">
                <a href="/posts?categories={{ $cat->slug }}">
                <div class="card bg-dark text-white mb-3">
                    <img src="https://source.unsplash.com/random/500×500?{{ $cat->name }}" class="card-img" alt="{{ $cat->name }}" height="200" class="img-fluit">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                      <h5 class="card-title text-center flex-fill p-4 fs-5" style="background-color: rgba(0,0,0,0.7)">{{ $cat->name }}</h5>
                    </div>
                  </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection