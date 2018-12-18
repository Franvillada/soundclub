@extends('layouts.aside')

@section('subcontent')

<div class="row">
<div class="col-lg-10 offset-lg-1">
    <div class="row mb-3">
    <div class="col-lg-12 p-0 align-items-center">
        <h3 class="mt-2 py-2" style="text-align:center; color:white; background-color:#375D3B">Mensajes recibidos de <strong>{{ Auth::user()->name }}</strong></h3>
    </div>
    </div>

@if($messages->count() > 0)

    @foreach ($messages as $message)
        {{ $message->title }}
    @endforeach

@else
    <h3>El usuario {{ Auth::user()->name }} no registra mensajes recibidos</h3>
@endif



</div>
</div>



@endsection
