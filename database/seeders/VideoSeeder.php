<?php

namespace Database\Seeders;
use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
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
         
        ]

        );
    }
}
