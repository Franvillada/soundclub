@extends('layouts.aside')

@section('subcontent')

<div class="col-lg-10 offset-lg-1">
    <div class="row mb-3">
    <div class="col-lg-12 p-0 align-items-center">
        <h3 class="mt-2 py-2" style="text-align:center; color:white; background-color:#375D3B">Evento: <strong>{{ $event->title }}</strong></h3>
    </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div id="map" style="height:100%;"></div>
        </div>

        <div class="col-lg-8">
            <div class="row mt-1 mb-2">
                <div class="col-lg-6 d-flex align-items-center">
                    <h5>Descripción:<h5>
                </div>
                <div class="col-lg-6 p-0 d-flex d-flex align-items-center justify-content-center" style="overflow: hidden; text-align:center; background-color:#E1E6B9; font-weight:bold; min-height: 200px;">
                    <p class="p-1 m-0">{{ $event->description }}</p>
                </div>
            </div>
            <div class="row mt-2 mb-2">
                <div class="col-lg-6">
                    <h5>Ubicación:<h5>
                </div>
                <div class="col-lg-6 p-0" style="overflow: hidden; text-align:center; background-color:#E1E6B9; font-weight:bold; min-height: inherit;">
                    <p class="p-1 m-0">{{ $event->location }}</p>
                </div>
            </div>
            <div class="row mt-2 mb-2">
                <div class="col-lg-6">
                    <h5>Fecha del evento:<h5>
                </div>
                <div class="col-lg-6 p-0" style="overflow: hidden; text-align:center; background-color:#E1E6B9; font-weight:bold; min-height: inherit;">
                    <p class="p-1 m-0">{{ $event->date }}</p>
                </div>
            </div>
            <div class="row mt-2 mb-2">
                <div class="col-lg-6">
                    <h5>Usuario creador:<h5>
                </div>
                <div class="col-lg-6 p-0" style="overflow: hidden; text-align:center; background-color:#E1E6B9; font-weight:bold; min-height: inherit;">
                    <p class="p-1 m-0">{{ $event->user->name }}</p>
                </div>
            </div>
        </div>
    </div>

<script>
        function initMap() {
            var uluru = {lat: -34.595282, lng: -58.389902};
            var map = new google.maps.Map(document.getElementById('map'), {zoom: 14, center: uluru});
            var marker = new google.maps.Marker({position: uluru, map: map});
        }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8_C0RyWqcmMm8RLZqE6-rqxn8p5bZEbM&callback=initMap"></script>

@endsection
