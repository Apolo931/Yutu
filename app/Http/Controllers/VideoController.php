<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    
    function consultar(){
    
     
    $videos = Video::paginate(3);
    
    return view('video.videos', compact('videos'));
    }

    function registrar(){
        
        return view('registrar');
    }

    function guardarRegistro(Request $datos){
       
        $video= Video::create($datos->post());
        return redirect('/videos');

    }

    function editar($id){

        $video = Video::find($id);

        return view('video.editar', compact('video'));
    }

    function eliminar($id){

        $video = Video::find($id);
        $video->delete();

        return redirect('/videos');
    }

    function actualizar(Request $datos, $id){
        $video = Video::find($id);
        $video->nombre = $datos->input('nombre');
        $video->restriccion_edad = $datos->input('restriccion_edad');
        $video->descripcion = $datos->input('descripcion');
        $video->fecha = $datos->input('fecha');
        $video->categoria = $datos->input('categoria');
        $video->save();

        return redirect('/videos');
    }
}
