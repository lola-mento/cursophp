@extends('adminlte::page')
@section('title','Creacion Autores')
@section('content_header')
    <h1>Edición de autores</h1>
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($autore,['route' => ['autores.update',$autore],'method' => 'put']) !!}
            @include('autores.partials.form')
            {!! Form::submit('Editar autor', ['class' => 'btn btn-success btn-sm']) !!}
        {!! Form::close() !!}

    </div>
</div>
@endsection