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
        <div class="row my-2 message-container">
            <div class="col-lg-12">
                <div class="row my-1 message-title">
                    <div class="col-lg-6 text-left">
                        {{ $message->title }}
                    </div>
                    <div class="col-lg-6 text-right">
                        {{ $message->created_at }}
                    </div>
                </div>
                <div class="row my-1 message-content">
                    {{ $message->content }}
                </div>
            </div>
        </div>
    @endforeach

@else
    <h3>El usuario {{ Auth::user()->name }} no registra mensajes recibidos</h3>
@endif



</div>
</div>



@endsection
