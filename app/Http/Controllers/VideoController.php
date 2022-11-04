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
}
