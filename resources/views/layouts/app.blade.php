<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <title>Laravel App - @yield('title')</title>
</head>
<body>
    <div class="p-3 px-md-4 bg-white border-bottom shadow-sm mb-3">
        <div class="container d-flex flex-column flex-md-row algin-items-center ">
            <p class="h5 my-0 mr-md-auto font-weight-normal">
                <a class="text-dark" href="{{ route('home.index' )}}">Laravel App</a>
            </p>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="{{ route('home.index') }}">Home</a>
                <a class="p-2 text-dark"href="{{ route('home.contact') }}">Contact</a>
                <a class="p-2 text-dark"href="{{ route('posts.index') }}">Blog Posts</a>
                <a class="p-2 text-dark" href="{{ route('posts.create') }}">Add</a>
            </nav>
        </div>
    </div>
    <div class="container">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>
