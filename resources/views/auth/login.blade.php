@extends('layouts.app')

@section('content')

<div class="login">
    <div class="row w-100 ml-0 mr-0">
    <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4 login-container mb-5">
        <div class="row mt-3">
            <div class="col-lg-12 d-flex justify-content-center">
                <img class= "logo mr-0" src="images/logo.jpg" alt="logo">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="titulo-login">SoundClub</h1>
            </div>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row">
            <div class="col-lg-12">
                
                <div class="form-group">
                    <label for="email" class="label-formulario">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" name="email" class="form-control mb-0 contenedor-input{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback label-formulario" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <label for="password" class="label-formulario">{{ __('Password') }}</label>
                <div class="form-group">
                    <input id="password" type="password" name="password" class="form-control mb-0 contenedor-input contenedor-contraseña-login{{ $errors->has('password') ? ' is-invalid' : '' }}" required>

                    @if ($errors->has('password'))
                    <span class="invalid-feedback label-formulario" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <input type="checkbox" class="label-formulario" name="remember" value="" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember" >{{ __('Remember Me') }}</label>
                <button type="submit" class="boton-registro mb-0">{{ __('Login') }}</button>
                <div>
                    <a class="btn btn-link contenedor-input" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            </div>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection
