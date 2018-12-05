@extends('layouts.aside')

@section('subcontent')

@foreach($users->chunk(3) as $chunk)
 <div class="row d-flex justify-content-center">
     @foreach($chunk as $user)
        <div class="col-lg-3 col-md-4 mx-2 my-2 py-2 card text-center">
            <img class="card-img-top d-flex align-self-center rounded-circle" src="images/perfil.png" alt="Imagen usuario">
            <div class="card-body pb-0">
            <a href="#"><h5 class="card-title">{{ $user->fullName()}}</h5></a>
            <h6>Edad: {{ $user->getEdad()}}</h6>
            <h6>Instrumento(s): {{ $user->instrument }}</h6>
            <h6>Banda: {{ isset($user->band_name) ? $user->band_name : "--"}}</h6>
            </div>
        </div>
     @endforeach
 </div>
@endforeach
{{ $users->links() }}

@endsection
