<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alojamientos;

class AlojamientosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alojamientos::create([
            'nombre' => "Aparthotel",
            'descripcion' => "El Apartahotel portal de leon dispone de restaurante, vistas al río y WiFi gratuita y está situado en Caboalles de Abajo, a 9 km de La Ferradura y La Gobia.",
            'precio' =>"35",
            'imagen' =>"aparthotel.jpg"
        ]);

        Alojamientos::create([
            'nombre' => "El Abiseu",
            'descripcion' => "Unos apartamentos que cuentan con piscina y situados en Caboalles de Abajo.",
            'precio' =>"75",
            'imagen' =>"abiseu.jpg"
        ]);

        Alojamientos::create([
            'nombre' => "Hotel la Brañina",
            'descripcion' => "Organizar las excursiones es sencillo, porque en los senderos y en las pistas hay sitio para todos y el Valle de Laciana tiene mucho que mostraros.",
            'precio' =>"44",
            'imagen' =>"hotal_brañina.jpg"
        ]);
    }
}
