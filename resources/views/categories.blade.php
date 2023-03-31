@extends('layouts.main')

@section('container')
<h1>Post Categories</h1>
<br>
@foreach ($categories as $cat)
<article class="mb-5">
    <ul>
        <li>
            <h3><a href="/categories/{{ $cat->slug }}">{{ $cat->name }}</a></h3>
        </li>
    </ul>
</article>
@endforeach

@endsection