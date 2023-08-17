<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/bootstrap.css')
    <title>Document</title>
</head>
<body>
<div class="">

    <div>
        <nav>
            <ul class="gap-10  flex flex-row">
                <li><a href="{{ route('main.index') }}">Main</a></li>
                <li><a href="{{ route('posts.index') }}">Post</a></li>
                <li><a href="{{ route('about.index') }}">About</a></li>
                <li><a href="{{ route('contact.index') }}">Contacts</a></li>

                @can('view', Auth::user())

                <li><a href="{{ route('admin.post.index') }}">Admin</a></li>
                @endcan
            </ul>
        </nav>
    </div>
    
    @yield('content')
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</html>
