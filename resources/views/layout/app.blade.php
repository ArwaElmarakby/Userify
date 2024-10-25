<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title')</title>
<link rel="stylesheet" href="/assets/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/assets/images/logo/logo.png" width="50" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/posts">my posts</a>

                </li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('posts.create') }}">create new post</a>
</li>
</ul>
</div>
</div>
</nav>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@yield('content')






{{--@yield('home')--}}
{{--@yield('user-posts')--}}
{{--@yield('create-post')--}}
{{--@yield('show--single-post')--}}
{{--@yield('edit-post')--}}
{{--@yield('create-post')--}}



<div class="d-flex justify-content-center" style="margin-top: 250px">
    <footer class="text-dark text-opacity-50">copyright reserved @ITI 2024</footer>
</div>
<script src="/assets/js/bootstrap.bundle.js"></script>
</body>
</html>
