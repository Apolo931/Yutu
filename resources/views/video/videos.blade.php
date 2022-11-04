@extends('master')

@section('contenido')
    <br><br>
    <h1 class="text-center">Videos</h1><br><br>

    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Fecha</th>
            <th>Categoria</th>
            <th>Restricción</th>
            <th>Edicion</th>
        </thead>
<tbody>
    @foreach ($videos as $v)
            <tr>
                <td>{{ $v -> id}}</td>
                <td>{{ $v -> nombre}}</td>
                <td>{{ $v -> descripcion}}</td>
                <td>{{ $v -> fecha}}</td>
                <td>{{ $v -> categoria}}</td>
                <td>{{ $v -> restriccion_edad}}</td>
                <td>
                    <a href="" class="btn btn-primary btn-sm">Editar</a>
                    <a href="" class="btn btn-danger btn-sm">Eliminar</a>
                </td>
            </tr>
    @endforeach
</tbody>
    </table><br><br><br>
    
    <div class="text-center">
        {{$videos->links()}}
    </div>
@stop