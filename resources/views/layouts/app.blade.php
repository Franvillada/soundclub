<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel p-0">
            <div class="row container header-container">
            <div class="headernaming col-sm-12 col-md-5 offset-md-1 col-lg-5 offset-lg-1">
                <a href="{{ route('welcome')}}">
                <img class= "logo" src="{{ asset('images/logo.jpg') }}" alt="logo">
                </a>
                <a href="{{ route('welcome')}}">
                <h1 class="pl-4"><strong>Soundclub</strong></h1>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link buttonsignin text-center" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link buttonsignup text-center" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
            </div>
        </nav>

        <main class="p-0">

            @yield('content')

        </main>

        <footer>
            <div class="row  footer-container mr-0 ml-0">
            <div class="d-flex col-12 justify-content-center col-lg-6 justify-content-lg-start">
                <img class="ml-lg-5 logo-footer" src="{{asset('images/logo.png')}}" alt="logo">
                <h2 class="ml-1 ml-lg-2">{{ config('app.name', 'Laravel') }}</h2>
                <p class="ml-2 ml-lg-4">Copyright @ 2018</p>
            </div>
            <div class="d-flex col-12 col-lg-6 justify-content-around">
                <div class="d-flex align-items-center">
                    <a href="#" class="py-2">Términos</a>
                </div>
                <div class="d-flex align-items-center">
                    <a href="#" class="py-2">Politica de privacidad y cookies</a>
                </div>
            </div>
            </div>
        </footer>
    </div>
</body>
</html>
