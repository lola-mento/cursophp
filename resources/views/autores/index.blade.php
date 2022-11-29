@extends('adminlte::page')
@section('title','Autores')
@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('autores.create') }}">Crear autor</a>
    <h1>Gestión de autores</h1>
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-striped"> 
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Pais</th>
                    <th>Fecha de nacimiento</th>
                    <th colspan="2"></th>
                </tr>
                <tbody>
                    @foreach($autores as $autor)
                    <tr>
                        <td>{{$autor->nombre}}</td>
                        <td>{{$autor->edad}}</td>
                        <td>{{$autor->pais}}</td>
                        <td>{{$autor->fnac}}</td>
                        <td width="10px"><a class="btn btn-primary btn-sm float-right" href="{{ route('autores.edit',$autor) }}">Editar</a></td>
                        <form action="{{ route('autores.destroy',$autor)}}" method="POST">
                            @csrf
                            @method('delete')
                            <td width="10px">
                                <button class="btn btn-danger btn-sm float-right">Eliminar</button>
                            </td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
    </div>
</div>
@endsection
