@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="text-align: center">
        SISTEMA DE INFORMACIÓN WEB DEL AREA DE SEGURIDAD E HIGIENE INDUSTRIAL
    </h1>
@stop

@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <img src="vendor\adminlte\dist\img\seguridad-industria-petrolera.jpg" alt="">
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
