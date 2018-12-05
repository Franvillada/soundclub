@extends('layouts.app')

@section('content')

<div class="row mt-5 mb-5">
    <div class="col-lg-2">
        <div class="row mt-5 mb-3">
        <div class="col-lg-12 modulos text-center">
            <a href="{{ route('musicos') }}">Musicos</a>
        </div>
        </div>
        <div class="row mt-2 mb-3">
        <div class="col-lg-12 modulos text-center">
            <a href="{{ route('eventos') }}">Eventos</a>
        </div>
        </div>
        <div class="row mt-2 mb-3">
        <div class="col-lg-12 modulos text-center">
            <a href="{{ route('perfil') }}">Perfil</a>
        </div>
        </div>
    </div>
    <div class="col-lg-10">
        @yield('subcontent')
    </div>




@endsection
