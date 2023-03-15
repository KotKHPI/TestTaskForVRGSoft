<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}" defer></script>
    <title>@yield('title')</title>
</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm mb-3">
    <h5 class="my-0 mr-md-auto font-weight-normal">Laravel App</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2" href="{{route('home')}}">Home</a>
        <a class="p-2" href="{{route('books.index')}}">Books</a>
        <a class="p-2" href="{{route('authors.index')}}">Authors</a>
    </nav>
</div>

@yield('content')
</body>
</html>
