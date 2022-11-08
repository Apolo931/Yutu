@extends('master')

@section('contenido')

<h1>Subir video</h1><hr>
                <form method="post" action="{{url('video/actualizar')}}/{{$video->id}}">
                    @csrf
                    <div class="form-group">
                        <label for="">Nombre del video:</label>
                        <input value="{{$video->nombre  }}" type="text" class="form-control" name="nombre" placeholder="Teclea el nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="">Restriccion de edad:</label><br>
                    @if($video->restriccion_edad == 1)
                        <input type="radio" name="restriccion_edad" value="1" checked> Mayores de edad <br>
                        <input type="radio" name="restriccion_edad" value="0"> Apto para todo público
                    @else
                        <input type="radio" name="restriccion_edad" value="1"> Mayores de edad <br>
                        <input type="radio" name="restriccion_edad" value="0" checked> Apto para todo público
                    @endif
                    </div>

                    <div class="form-group">
                        <label for="">Descripción:</label>
                        <textarea name="descripcion" id="" cols="30" rows="10" class="form-control" required>{{$video->descripcion}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Fecha de lanzamiento:</label>
                        <input value="{{$video->fecha}}" type="date" class="form-control" name="fecha" required>
                    </div>
                    <div class="form-group">
                        <label for="">Categoría:</label>
                        <input value="{{$video->categoria}}" type="text" class="form-control" name="categoria" placeholder="Teclea el nombre" required>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="guardarRegistro">
                        <a href="/consultar" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
@stop