<?php

namespace Database\Seeders;

use App\Models\BaseIdiomas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BaseIdiomasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $idiomas = array("Aleman",
         "Bulgaro",
         "Chino-Mandarin",
         "Español",
         "Frances",
         "Hebreo",
         "Holandes",
         "Hungaro",
         "Indio",
         "Ingles",
         "Italiano",
         "Portugues",
         "Japones",
         "Ruso",
         "Coreano",
         "Taiwanes",
         "Arabe");

         foreach ($idiomas as $idioma) {
             BaseIdiomas::query()->create([
                 'nombre_idioma' => $idioma
            ]);
         }

    }
}
