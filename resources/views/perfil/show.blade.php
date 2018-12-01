@extends('layouts.aside')

@section('subcontent')

    <div class="row mb-3">
        <div class="col-lg-12 align-items-center">
            <h3 class="mt-2 py-2" style="text-align:center; color:white; background-color:#375D3B">Perfil de <strong>{{ $user->name }}</strong></h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="row" style="min-height:360px">
                <p>{{ $user->photo_path }}</p>
            </div>
            <div class="row edit-profile">
                <a class="d-flex justify-content-center align-items-center" href="{{ route('perfil.edit') }}">Editar Perfil</a>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="row mb-2 py-1 justify-content-center">Nombre(s):</div>
            <div class="row mb-2 py-1 justify-content-center">Apellido:</div>
            <div class="row mb-2 py-1 justify-content-center">Sexo:</div>
            <div class="row mb-2 py-1 justify-content-center">Fecha de Nacimiento:</div>
            <div class="row mb-2 py-1 justify-content-center">Email:</div>
            <div class="row mb-2 py-1 justify-content-center">Teléfono:</div>
            <div class="row mb-2 py-1 justify-content-center">País:</div>
            <div class="row mb-2 py-1 justify-content-center">Ciudad:</div>
            <div class="row mb-2 py-1 justify-content-center">Instrumento:</div>
            <div class="row mb-2 py-1 justify-content-center">Banda a la que pertenece:</div>
        </div>

        <div class="col-lg-4">
                <div class="row mb-2 py-1 justify-content-center" style="background-color:#E1E6B9; font-weight:bold">{{ $user->first_name }}</div>
                <div class="row mb-2 py-1 justify-content-center" style="background-color:#E1E6B9; font-weight:bold">{{ $user->last_name }}</div>
                <div class="row mb-2 py-1 justify-content-center" style="background-color:#E1E6B9; font-weight:bold">{{ $user->genre }}</div>
                <div class="row mb-2 py-1 justify-content-center" style="background-color:#E1E6B9; font-weight:bold">{{ $user->birth_date }}</div>
                <div class="row mb-2 py-1 justify-content-center" style="background-color:#E1E6B9; font-weight:bold">{{ $user->email }}</div>
                <div class="row mb-2 py-1 justify-content-center" style="background-color:#E1E6B9; font-weight:bold">{{ $user->phone_number }}</div>
                <div class="row mb-2 py-1 justify-content-center" style="background-color:#E1E6B9; font-weight:bold">{{ $user->country }}</div>
                <div class="row mb-2 py-1 justify-content-center" style="background-color:#E1E6B9; font-weight:bold">{{ $user->city }}</div>
                <div class="row mb-2 py-1 justify-content-center" style="background-color:#E1E6B9; font-weight:bold">{{ $user->instrument }}</div>
                <div class="row mb-2 py-1 justify-content-center" style="background-color:#E1E6B9; font-weight:bold">{{ $user->band_name }}</div>
            </div>
    </div>

@endsection
