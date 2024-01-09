@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="p-2">Plan de emergencia</h1>
@stop

@section('content')
    <h2 class="p-2">Plan de emergencia contra incendios</h2>

    <div class="text-center d-flex justify-content-center align-items-center">
        <img src="{{ asset('storage\documents\plan\planincendios.jpeg') }}" alt="plan-incendios" class="img-fluid rounded"
            width="40%" height='auto'>

        <img src="{{ asset('storage\documents\plan\accidentes-laborales.webp') }}" alt="accidentes-laborales"
            class="img-fluid rounded" width="30%">
    </div>

    <h2 class="p-2">Manuales de seguridad</h2>

    <div class="d-flex justify-content-around align-items-center flex-wrap">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top w-100" src="{{ asset('storage\documents\plan\seguridad-industrial-book.jpg') }}"
                alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-bold">Manual de seguridad</h5>
                <p class="card-text">
                    La seguridad industrial en el concepto moderno significa más que una simple situación de seguridad
                    física, una situación de bienestar personal, un ambiente de trabajo idóneo, una economía de costos
                    importantes y una imagen de modernización.
                </p>
                <a href="{{ asset('storage\documents\plan\MANUAL DE PRIMEROS AUXILIOS.pdf') }}" class="btn btn-primary">Ver
                    Manual</a>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
