@extends('layout.app')
@section('title')
    edit a post
@endsection
@section('content')

<div class="container">
    <form method="post" action="{{ route('posts.update',['post' => $post->id]) }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">title</label>
            <input type="text" name="post_title" value="{{ $post->title }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">content</label>
            <textarea class="form-control" name="post_content" aria-label="With textarea">{{ $post->content }}</textarea>
        </div>

        <div class="vstack">
            <button type="submit" class="btn btn-primary">update post</button>
        </div>
    </form>
</div>
@endsection

