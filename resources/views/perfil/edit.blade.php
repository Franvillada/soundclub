@extends('layouts.aside')

@section('subcontent')


<form method="POST" action="{{ route('register') }}">
    @csrf
    @method('PUT')

    <div class="row mb-5">
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

<button type="submit" class="boton-registro mb-0">Actualizar Usuario</button>
</div>
</div>
</form>

@endsection
