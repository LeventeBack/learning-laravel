@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    <form action="{{ action('PostsController@store') }}" method="POST">
        <div class="form-group">
            <label for="title"></label>
            <input type="text" class="form-control" name="title" placeholder="Title...">
        </div>
        <div class="form-group">
            <label for="body"></label>
            <textarea 
                class="ckeditor form-control"
                name="body" 
                placeholder="Body Text..."></textarea>
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <button type="submit" class="btn btn-primary">Add Post</button>
    </form>
    
@endsection