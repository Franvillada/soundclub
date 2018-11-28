<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
    <title>SoundClub</title>
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
                <h1 class="pl-4"><strong>{{ config('app.name', 'Laravel') }}</strong></h1>
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
            
        <div class="row banner-container w-100 mr-0 ml-0">
        <div class="col-12 col-md-5 offset-md-1 col-lg-5 offset-lg-1 info-general">
            <h2>Bienvenido a <strong>SoundClub</strong></h2>
            <article>
                <p>Animate a formar parte de este club exclusivo y obtené toda la información del mundo de la música.</p>
                <p>Compartí tu talento, creá tu red de contactos, informate sobre los eventos más importantes y viví nuevas experiencias.</p>
            </article>
            <button class="buttonbanner"><a href="#FAQ">Conoce más</a></button>
        </div>
        <div class="headerbuttons-banner col-12">
            <a href="login.php"><button class="buttonsignin">Sign In</button></a>
            <button class="buttonsignup">Sign Up</button>
        </div>
        <div class="col-12 col-md-4 offset-md-1 col-lg-4 offset-lg-1 registro">
            
            <form method="POST" action="{{ route('register') }}" class="mt-4">
                @csrf
                <div class="row">
                <div class="col-lg-12">
                    
                    <div class="form-group">
                        <label for="name" class="label-formulario">{{ __('Nombre de Usuario') }}</label>
                        <input id="name" type="text" class="form-control mb-0 contenedor-input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
    
                        @if ($errors->has('name'))
                            <span class="invalid-feedback label-formulario" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <label for="email" class="label-formulario">{{ __('E-Mail') }}</label>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control mb-0 contenedor-input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
    
                        @if ($errors->has('email'))
                            <span class="invalid-feedback label-formulario" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <label for="password" class="label-formulario">{{ __('Password') }}</label>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control mb-0 contenedor-input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    
                        @if ($errors->has('password'))
                            <span class="invalid-feedback label-formulario" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <label for="password-confirm" class="label-formulario">{{ __('Confirm Password') }}</label>
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control mb-0 contenedor-input" name="password_confirmation" required>
                    </div>
    
                    <button type="submit" class="boton-registro mb-0">
                        {{ __('Register') }}
                    </button>
                </div>
                </div>
            </form>
    
        </div>
        </div>

        <div class="row faq-container w-100 mr-0 ml-0">
        <div class="col-lg-12">
            <h2 class="titulo-faq" id="FAQ">Preguntas Frecuentes</h2>
            <ul class="lista-faq">
                <li>
                    <a href="#" class="preguntas"><p>¿Cómo creo una cuenta de SoundClub?</p></a>
                </li>
                <li>
                    <a href="#" class="preguntas"><p>¿Cómo cambio mi contraseña?</p></a>
                </li>
                <li>
                    <a href="#" class="preguntas"><p>¿Se puede modificar la información del perfil?</p></a>
                </li>
                <li>
                    <a href="#" class="preguntas"><p>¿Como funciona el buscador de musicos?</p></a>
                </li>
                <li>
                    <a href="#" class="preguntas"><p>Lorem ipsum dolor sit amet consectetur.</p></a>
                </li>
                <li>
                    <a href="#" class="preguntas"><p>Lorem ipsum dolor sit amet consectetur.</p></a>
                </li>
                <li>
                    <a href="#" class="preguntas"><p>Lorem ipsum dolor sit amet consectetur.</p></a>
                </li>
                <li>
                    <a href="#" class="preguntas"><p>Lorem ipsum dolor sit amet consectetur.</p></a>
                </li>
            </ul>    
        </div>
        </div>
    
        <footer>
            <div class="row  footer-container mr-0 ml-0">
            <div class="d-flex col-12 justify-content-center col-lg-6 justify-content-lg-start">
                <img class="ml-lg-5 logo-footer" src="images/logo.png" alt="logo">    
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