@extends('layouts.aside')

@section('subcontent')
    

<div class="row">
<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3">
    
    <div class="row mb-4 mt-5">
        <div class="col-lg-12">
            <h1 class="titulo-login">Crea tu Evento</h1>
        </div>
    </div>
    <form method="POST" action="" enctype="multipart/form-data">
        @csrf
        <div class="row mb-5">
        <div class="col-lg-12">
            
            <div class="form-group">
                <label for="title" class="label-formulario">{{ __('Nombre del Evento') }}</label>
                <input id="title" type="text" class="form-control mb-0 contenedor-input{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                @if ($errors->has('title'))
                    <span class="invalid-feedback label-formulario" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>

            <label for="description" class="label-formulario">{{ __('Descripción') }}</label>
            <div class="form-group">
                <textarea id="description" class="form-control mb-0 contenedor-input{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required></textarea>

                @if ($errors->has('description'))
                    <span class="invalid-feedback label-formulario" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
            <label for="location" class="label-formulario">{{ __('Ubicación') }}</label>
            <div class="form-group">
                <input id="location" type="string" class="form-control mb-0 contenedor-input{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" required>

                @if ($errors->has('location'))
                    <span class="invalid-feedback label-formulario" role="alert">
                        <strong>{{ $errors->first('location') }}</strong>
                    </span>
                @endif
            </div>

            <label for="date" class="label-formulario">{{ __('Dia') }}</label>
            <div class="form-group">
                <input id="date" type="date" class="form-control mb-0 contenedor-input{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" required>

                @if ($errors->has('date'))
                    <span class="invalid-feedback label-formulario" role="alert">
                        <strong>{{ $errors->first('date') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group d-flex justify-content-center">
                <label for="banner" class="avatar-label label-formulario ml-0">Banner del Evento</label>
                <input id="banner" type="file" class="avatar-input form-control mb-0 contenedor-input" name="banner" autofocus>
            </div>

            <button type="submit" class="boton-registro mb-0">
                {{ __('Crear Evento') }}
            </button>
        </div>
        </div>
    </form>
</div>
</div>

@endsection