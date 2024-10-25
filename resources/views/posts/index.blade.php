@extends('layout.app')
@section('title')
@endsection
@section('content')
@if(session('successMsg'))
<div class="alert alert-success alert-dismissible fade show">
<p><b>{{ session('successMsg') }}</b></p>
<button class="btn-close" data-bs-dimiss="alert"></button>
</div>
@endif
@if(session('updateMsg'))
<div class="alert alert-success alert-dismissible fade show">
    <p><b>{{ session('updateMsg') }}</b></p>
    <button class="btn-close" data-bs-dimiss="alert"></button>
</div>
@endif
@if(session('deleteMsg'))
<div class="alert alert-danger alert-dismissible fade show">
    <p><b>{{ session('deleteMsg') }}</b></p>
    <button class="btn-close" data-bs-dimiss="alert"></button>
</div>
@endif

@if(!$posts->isEmpty())
<table class="table table-striped container">
    <thead>
    <tr>
        <!--        <th scope="col">#</th>-->
        <th scope="col">title</th>
        <th scope="col">description</th>
        <th scope="col">author</th>
        <th scope="col">created_at</th>
        <th scope="col">actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
    <tr>
        <td>{{ $post->title }}</td>
        <td>{{ $post->content }}</td>
        <td>{{ $post->user_id }}</td>
        <td>{{ $post->created_at ? $post->created_at : 'no data' }}</td>
        <td class="d-flex justify-content-center gap-2">
            <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn btn-primary">show</a>
            <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-warning">edit</a>
            <form method="post" action="{{ route('posts.destroy', ['post' => $post->id]) }}">
                @csrf
                @method('delete')
                <input class="btn btn-danger" type="submit" value="delete">
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {{ $posts->links('pagination::bootstrap-4') }}
</div>
@else
<div class="bg-warning text-center">
    No Posts Found
    <p class="text-danger"><b><a href="{{ route('posts.create') }}">try to create a new post</a></b></p>
</div>
@endif
@endsection
