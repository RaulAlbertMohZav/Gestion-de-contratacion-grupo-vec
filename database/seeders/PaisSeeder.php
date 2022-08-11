<?php

namespace Database\Seeders;

use App\Models\Pais;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paises = array("Alemania",
        "Argentina",
        "Australia",
        "Austria",
        "Bélgica",
        "Belice",
        "Bolivia",
        "Brasil",
        "Canadá",
        "Chile",
        "China",
        "Colombia",
        "Corea del Sur",
        "Costa Rica",
        "Croacia",
        "Cuba",
        "Dinamarca",
        "Ecuador",
        "El Salvador",
        "Eslovenia",
        "España",
        "Estados Unidos",
        "Filipinas",
        "Finlandia",
        "Francia",
        "Grecia",
        "Guatemala",
        "Haití",
        "Honduras",
        "Hong Kong",
        "Hungría",
        "India",
        "Irlanda",
        "Israel",
        "Italia",
        "Jamaica",
        "Japón",
        "México",
        "Nicaragua",
        "Noruega",
        "Nueva Zelanda",
        "Holanda",
        "Panamá",
        "Paraguay",
        "Perú",
        "Polonia",
        "Portugal",
        "Puerto Rico",
        "Reino Unido",
        "República Checa",
        "República Dominicana",
        "Rusia",
        "Sudáfrica",
        "Suecia",
        "Suiza",
        "Uruguay",
        "Venezuela",
        "Yugoslavia",
        "Trinidad y Tobago",
        "Bermudas",
        "Bahamas",
        "Barbados",
        "Curacao/Aruba",
        "Jordania",
        "Taiwan");


        foreach ($paises as $pais) {
            Pais::query()->create([
                'pais' => $pais
            ]);
        }

    }
}
