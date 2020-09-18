@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    <form action="{{ action('PostsController@update', $post->id) }}" method="POST">
        @method('PUT')
        <div class="form-group">
            <label for="title"></label>
        <input 
            type="text" 
            class="form-control" 
            name="title" 
            placeholder="Title..." 
            value="{{$post->title}}"
        >
        </div>
        <div class="form-group">
            <label for="body"></label>
            <textarea 
                class="ckeditor form-control"
                name="body" 
        placeholder="Body Text...">{!!$post->body!!}</textarea>
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
    
@endsection