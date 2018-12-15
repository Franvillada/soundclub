@extends('layouts.aside')

@section('subcontent')

<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row mb-5">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="first_name" class="label-formulario">Nombre(s)</label>
                <input id="first_name" type="text" class="form-control mb-0 contenedor-input{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ $user->first_name }}" required autofocus>
            </div>
                @if ($errors->has('first_name'))
                    <span class="invalid-feedback label-formulario" role="alert">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif
            <div class="form-group">
                <label for="last_name" class="label-formulario">Apellido</label>
                <input id="last_name" type="text" class="form-control mb-0 contenedor-input{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ $user->last_name }}" required autofocus>
            </div>
                @if ($errors->has('last_name'))
                    <span class="invalid-feedback label-formulario" role="alert">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif
            <div class="form-group">
                <label for="genre" class="label-formulario">Sexo</label>
                <select name="genre" id="genre" class="form-control mb-0 contenedor-input">
                    <option selected hidden>{{ $user->genre }}</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
                @if ($errors->has('genre'))
                    <span class="invalid-feedback label-formulario" role="alert">
                        <strong>{{ $errors->first('genre') }}</strong>
                    </span>
                @endif
            <div class="form-group">
                <label for="birth_date" class="label-formulario">Fecha de Nacimiento</label>
                <input id="birth_date" type="date" class="form-control mb-0 contenedor-input{{ $errors->has('birth_date') ? ' is-invalid' : '' }}" name="birth_date" value="{{ $user->birth_date }}" required autofocus>
            </div>
                @if ($errors->has('birth_date'))
                    <span class="invalid-feedback label-formulario" role="alert">
                        <strong>{{ $errors->first('birth_date') }}</strong>
                    </span>
                @endif
            <div class="form-group">
                <label for="phone_number" class="label-formulario">Teléfono</label>
                <input id="phone_number" type="text" class="form-control mb-0 contenedor-input{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ $user->phone_number }}" autofocus>
            </div>
                @if ($errors->has('phone_number'))
                    <span class="invalid-feedback label-formulario" role="alert">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                    </span>
                @endif
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="country" class="label-formulario">País</label>
                <input id="country" type="text" class="form-control mb-0 contenedor-input{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ $user->country }}" required autofocus>
            </div>
                @if ($errors->has('country'))
                    <span class="invalid-feedback label-formulario" role="alert">
                        <strong>{{ $errors->first('country') }}</strong>
                    </span>
                @endif
            <div class="form-group">
                <label for="city" class="label-formulario">Ciudad</label>
                <input id="city" type="text" class="form-control mb-0 contenedor-input{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $user->city }}" required autofocus>
            </div>
                @if ($errors->has('city'))
                    <span class="invalid-feedback label-formulario" role="alert">
                        <strong>{{ $errors->first('city') }}</strong>
                    </span>
                @endif
            <div class="form-group">
                <label for="instrument" class="label-formulario">Instrumento</label>
                <input id="instrument" type="text" class="form-control mb-0 contenedor-input{{ $errors->has('instrument') ? ' is-invalid' : '' }}" name="instrument" value="{{ $user->instrument }}" required autofocus>
            </div>
                @if ($errors->has('instrument'))
                    <span class="invalid-feedback label-formulario" role="alert">
                        <strong>{{ $errors->first('instrument') }}</strong>
                    </span>
                @endif
            <div class="form-group">
                <label for="band_name" class="label-formulario">Banda a la que pertenece</label>
                <input id="band_name" type="text" class="form-control mb-0 contenedor-input{{ $errors->has('band_name') ? ' is-invalid' : '' }}" name="band_name" value="{{ $user->band_name }}" autofocus>
            </div>
                @if ($errors->has('band_name'))
                    <span class="invalid-feedback label-formulario" role="alert">
                        <strong>{{ $errors->first('band_name') }}</strong>
                    </span>
                @endif
            <div class="form-group">
                <label for="avatar" class="avatar-label label-formulario">Foto de Perfil</label>
                <input id="avatar" type="file" class="avatar-input form-control mb-0 contenedor-input" name="avatar" autofocus>
            </div>
        </div>

            <button type="submit" class="boton-registro mb-0">Actualizar Usuario</button>

        </div>
    </div>
</form>

@endsection
