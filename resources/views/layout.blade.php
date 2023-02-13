<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }} ">
    @yield('styles')
</head>

<body style="background-color: #eee;">
    <nav class="navbar fixed-top  navbar-expand-lg navbar-dark " style="background-color: #052339;font-family:cursive">
        <div class="container-fluid">
            <a class="navbar-brand active btn btn-outline-success" href="#">Library >></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link btn mx-2 btn-outline-success" href="{{ route('books.index') }}">All Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success" href="{{ route('categories.index') }}">
                            categories
                        </a>
                    </li>

                </ul>
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link btn mx-2 btn-outline-success"
                            href="{{ route('auth.register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn mx-2 btn-outline-success"
                            href="{{ route('auth.login') }}">Login</a>
                    </li>
                    @endguest
                    @auth
                        <li class="nav-item">
                            <a href="#"
                                class="nav-link disabled btn btn-outline-info mx-3">{{ Auth::user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn mx-2 btn-outline-success"
                                href="{{ route('auth.logout') }}">Logout</a>
                        </li>
                    @endauth

                </ul>

            </div>
        </div>
    </nav>

    <div class="container card py-5" style="margin-top: 100px">
        @yield('content')
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    @yield('scripts')
</body>

</html>
