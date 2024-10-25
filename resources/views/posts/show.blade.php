@extends('layout.app')
@section('title')
single post
@endsection
@section('content')
<div class="container">
    <div class="card text-bg-dark">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <hr>
            <p class="card-text">{{ $post->content }}</p>
        </div>
    </div>
</div>
@endsection
