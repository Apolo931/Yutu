@extends('master')

@section('contenido')

<h1>Subir video</h1><hr>
                <form method="post" action="{{url('/guardarRegistro')}}">
                    @csrf
                    <div class="form-group">
                        <label for="">Nombre del video:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Teclea el nombre">
                    </div>

                    <div class="form-group">
                        <label for="">Restriccion de edad:</label><br>
                        <input type="radio" name="restriccion_edad" value="1"> Mayores de edad <br>
                        <input type="radio" name="restriccion_edad" value="0"> Apto para todo público
                    </div>

                    <div class="form-group">
                        <label for="">Descripción:</label>
                        <textarea name="descripcion" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Fecha de lanzamiento:</label>
                        <input type="date" class="form-control" name="fecha">
                    </div>
                    <div class="form-group">
                        <label for="">Categoría:</label>
                        <input type="text" class="form-control" name="categoria" placeholder="Teclea el nombre">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
@stop