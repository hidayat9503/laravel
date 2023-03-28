@extends('layouts.main')

@section('container')
<h1>Halaman {{ $title }}</h1>
<br>
<h3>Nama: {{ $name }}</h3>
<h4>Email: {{ $email }}</h4>
<img src="img/{{ $image }}" alt="{{ $name }}" width="200">
@endsection