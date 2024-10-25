@extends('layout.app')
@section('title')
    create a post
@endsection
@section('content')

<div class="container">


    <form method="post" action="{{ route('posts.store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">title</label>
            <input type="text" name="post_title" value="{{ old('post_title') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
{{--        @error('post_title')--}}
{{--        <span class="text-danger">{{ $message }}</span>--}}
{{--        @enderror--}}
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">content</label>
            <textarea class="form-control" name="post_content" value="{{ old('post_content') }} aria-label="With textarea"></textarea>
        </div>
        @error('post_content')
        <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="vstack">
            <button type="submit" class="btn btn-primary">Add post</button>
        </div>
    </form>
</div>
@endsection
