@extends('adminlte::page')

@section('title', 'ConsumoApp')

@section('content_header')
    <h1>ConsumoApp</h1>
@stop

@section('content')
<h5>Bem vindo ao painel de ConsumoApp.</h5>
    <p>Site com intuito de consumir recursos públicos do site <a href="https://jsonplaceholder.typicode.com/">{JSON} Placeholder</a></p>
    <div id="app">
        <example-component></example-component>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop