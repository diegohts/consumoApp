@extends('adminlte::page')

@section('title', 'ConsumoApp')

@section('content_header')
    <h1>ConsumoApp - Posts</h1>
@stop

@section('content')
    <div id="app">
        <posts-component></posts-component>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop