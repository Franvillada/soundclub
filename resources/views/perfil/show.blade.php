@extends('layouts.aside')

@section('subcontent')

<div class="row">
<div class="col-lg-10 offset-lg-1">
    <div class="row mb-3">
    <div class="col-lg-12 p-0 align-items-center">
        <h3 class="mt-2 py-2" style="text-align:center; color:white; background-color:#375D3B">Perfil de <strong>{{ $user->name }}</strong></h3>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-4">
        <div class="row" style="min-height:360px">
            <p>{{ $user->photo_path }}</p>
        </div>
        <div class="row">
            <div class="edit-profile col-lg-6">
                <a class="d-flex justify-content-center align-items-center" href="{{ route('perfil.edit') }}">Editar Perfil</a>
            </div>
            <div class="edit-profile col-lg-6">
                    <a class="d-flex justify-content-center align-items-center" href="{{ route('perfil.edit') }}">Editar Foto</a>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="row mt-1 mb-2">
            <div class="col-lg-6">
                <h5>Nombre(s):<h5>
            </div>
            <div class="col-lg-6 p-0" style="overflow: hidden; text-align:center; background-color:#E1E6B9; font-weight:bold; min-height: inherit;">
                <p class="p-1 m-0">{{ $user->first_name }}</p>
            </div>
        </div>
        <div class="row mt-2 mb-2">
            <div class="col-lg-6">
                <h5>Apellido:<h5>
            </div>
            <div class="col-lg-6 p-0" style="overflow: hidden; text-align:center; background-color:#E1E6B9; font-weight:bold; min-height: inherit;">
                <p class="p-1 m-0">{{ $user->last_name }}</p>
            </div>
        </div>
        <div class="row mt-2 mb-2">
            <div class="col-lg-6">
                <h5>Sexo:<h5>
            </div>
            <div class="col-lg-6 p-0" style="overflow: hidden; text-align:center; background-color:#E1E6B9; font-weight:bold; min-height: inherit;">
                <p class="p-1 m-0">
                @if($user->genre == 'male')
                    Masculino
                @elseif($user->genre == 'female')
                    Femenino
                @endif
                </p>
            </div>
        </div>
        <div class="row mt-2 mb-2">
            <div class="col-lg-6">
                <h5>Fecha de Nacimiento:<h5>
            </div>
            <div class="col-lg-6 p-0" style="overflow: hidden; text-align:center; background-color:#E1E6B9; font-weight:bold; min-height: inherit;">
                <p class="p-1 m-0">{{ $user->birth_date }}</p>
            </div>
        </div>
        <div class="row mt-2 mb-2">
            <div class="col-lg-6">
                <h5>Email:<h5>
            </div>
            <div class="col-lg-6 p-0" style="overflow: hidden; text-align:center; background-color:#E1E6B9; font-weight:bold; min-height: inherit;">
                <p class="p-1 m-0">{{ $user->email }}</p>
            </div>
        </div>
        <div class="row mt-2 mb-2">
            <div class="col-lg-6">
                <h5>Telefono:<h5>
            </div>
            <div class="col-lg-6 p-0" style="overflow: hidden; text-align:center; background-color:#E1E6B9; font-weight:bold; min-height: inherit;">
                <p class="p-1 m-0">{{ $user->phone_number }}</p>
            </div>
        </div>
        <div class="row mt-2 mb-2">
            <div class="col-lg-6">
                <h5>País:<h5>
            </div>
            <div class="col-lg-6 p-0" style="overflow: hidden; text-align:center; background-color:#E1E6B9; font-weight:bold; min-height: inherit;">
                <p class="p-1 m-0">{{ $user->country }}</p>
            </div>
        </div>
        <div class="row mt-2 mb-2">
            <div class="col-lg-6">
                <h5>Ciudad:<h5>
            </div>
            <div class="col-lg-6 p-0" style="overflow: hidden; text-align:center; background-color:#E1E6B9; font-weight:bold; min-height: inherit;">
                <p class="p-1 m-0">{{ $user->city }}</p>
            </div>
        </div>
        <div class="row mt-2 mb-2">
            <div class="col-lg-6">
                <h5>Instrumento:<h5>
            </div>
            <div class="col-lg-6 p-0" style="overflow: hidden; text-align:center; background-color:#E1E6B9; font-weight:bold; min-height: inherit;">
                <p class="p-1 m-0">{{ $user->instrument }}</p>
            </div>
        </div>
        <div class="row mt-2 mb-2">
            <div class="col-lg-6">
                <h5>Banda a la que pertenece:<h5>
            </div>
            <div class="col-lg-6" style="overflow: hidden; text-align:center; background-color:#E1E6B9; font-weight:bold; min-height: 20px;">
                <p class="p-1 m-0">{{ $user->band_name }}</p>
            </div>
        </div>
    </div>
    </div>
</div>
</div>

@endsection
