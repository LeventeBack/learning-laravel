@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the index page</p>
        <a href="/login" class="btn btn-primary btn-large">Login</a>
        <a href="/register" class="btn btn-success btn-large">Register</a>
    </div>
@endsection