@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary mb-5">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary mt-2">Edit</a>
     
    <form class="float-right mt-2" action="{{ action('PostsController@destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection