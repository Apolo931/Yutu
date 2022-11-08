<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::create([

            'nombre'                 => 'Fisica',
            'descripcion'            => 'holaa',
            'fecha'                  => '2004-12-01',
            'categoria'              => 'videojuegos',
            'restriccion_edad'       => 0
         
        ]);

        Video::create([

            'nombre'                 => 'Rainbow Sics Sige',
            'descripcion'            => 'Juego de locos',
            'fecha'                  => '2010-11-05',
            'categoria'              => 'videojuegos',
            'restriccion_edad'       => 1
         
        ]);


    }
}
