@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $title }}</h1>
</div>

<div class="col-lg-8">
    <form action="/dashboard/posts" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') }}" required autofocus>
          @error('title')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" value="{{ old('slug') }}" readonly required>
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        <div class="mb-3">
            <label for="categories" class="form-label">Categories</label>
            <select class="form-select" name="categories_id">
                @foreach ($categories as $cat)
                @if (old('categories_id') == $cat->id)
                <option value="{{ $cat->id }}" selected>{{ $cat->name }}</option>
                @else
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endif
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
          <label for="image" class="form-label">Upload Image</label>
          <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" value="{{ old('image') }}" accept="image/*" required autofocus>
          @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body">
            <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Create Post</button>
    </form>
</div>

<script>
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener("keyup", function() {
        let preslug = title.value;
        preslug = preslug.replace(/ /g,"-");
        slug.value = preslug.toLowerCase();
    });

    document.addEventListener('trix-file-accept', function (e) {
        e.preventDefault();
    })
</script>

@endsection

