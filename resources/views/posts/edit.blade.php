@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    <form action="{{ action('PostsController@update', $post->id) }}" method="POST" enctype="multipart/form-data">
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
        <div class="form-group">
            <input type="file" name="cover_image" id="">
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
    
@endsection