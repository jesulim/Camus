@extends('adminlte::page')

@section('title', 'Camus')

@section('content_header')
    <h1>Listado de Fichas</h1>
@stop

@section('content')
    @livewire('admin.cards-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop