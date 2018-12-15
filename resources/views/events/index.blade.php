@extends('layouts.aside')

@section('subcontent')

<div class="row">
    <div class="col-lg-3">
        <a href="{{ route('eventos.create')}}">Crear Evento</a>
    </div>
</div>

@if($events->isEmpty())
<div class="row">
    <div class="col-lg-8 offset-lg-2 text-center mt-5">
        <h4>No hay resultados de la busqueda</h4>
    </div>
</div>
@endif
@foreach($events->chunk(3) as $chunk)
 <div class="row d-flex justify-content-center">
     @foreach($chunk as $event)
        <div class="col-lg-3 col-md-4 mx-2 my-2 py-2 card text-center">
            
            
            <img 
            class="card-img-top d-flex align-self-center rounded-circle"
            src={{ (isset($event->photo_path)) ? asset($event->photo_path) : asset('images/perfil.png') }}
            alt="Imagen del Usuario"
            >
            

            <div class="card-body pb-0">
            <a href="#"><h5 class="card-title">{{ $event->title}}</h5></a>
            <h6>Ubicacion: {{ $event->location}}</h6>
            <h6>Dia: {{ $event->date }}</h6>
            </div>
        </div>
     @endforeach
 </div>
@endforeach
{{ $events->links() }}

@endsection
