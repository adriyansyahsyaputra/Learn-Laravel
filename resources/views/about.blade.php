@extends('layouts.main')

@section('container')
    <h1>About me</h1>
    <h3>my name is {{ $name }}</h3>
    <h4>Age : {{ $age }}</h4>
    <h5>Email : {{ $email }}</h5>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="300px" height="300px" class="img-thumbnail rounded-circle">
@endsection
