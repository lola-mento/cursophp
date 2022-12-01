@extends('adminlte::page')
@section('title','Autores')
@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('autores.create') }}">Crear autor</a>
    <h1>Gestión de autores</h1>
@endsection
@section('content')

@livewire('autor-index')
@livewireScripts

@endsection