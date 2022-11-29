@extends('adminlte::page')

@section('title','Creacion Autores')
@section('content_header')
    <h1>Creación de autores</h1>
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'autores.store']) !!}
            @include('autores.partials.form')
            {!! Form::submit('Crear autor', ['class' => 'btn btn-success btn-sm']) !!}
        {!! Form::close() !!}

    </div>
</div>
@endsection
