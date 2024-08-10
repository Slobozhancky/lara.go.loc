<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/bootstrap/bootstrap.min.css', 'resources/bootstrap/bootstrap.min.js', 'resources/css/main.css'])
    <title>@yield('title', 'Default title')</title>
</head>
<body>

<div class="container">
    <header>
        @section('navbar')
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home.contacts') }}">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @show
    </header>
    <main>
        @yield('home')
        @yield('contacts')
    </main>

    @include('layouts.components.footer', ['telegram' => "https://t.me/slobozhancky"])
</div>


<script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>
</body>
</html>
