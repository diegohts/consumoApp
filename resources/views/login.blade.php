@extends('adminlte::page')

@section('title', 'ConsumoApp')

@section('content')
    <div id="app">
        <login-component csrf_token="{{ @csrf_token() }}"></login-component>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@stop