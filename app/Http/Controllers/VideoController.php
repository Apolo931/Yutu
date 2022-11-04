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

}
