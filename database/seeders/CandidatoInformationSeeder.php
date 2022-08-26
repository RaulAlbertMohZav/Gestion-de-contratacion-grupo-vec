<?php

namespace Database\Seeders;

use App\Models\CandidateInformation;
use App\Models\CargoDesempenado;
use App\Models\Categoria;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandidatoInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $candidatosUsuarios = User::query()->where('rol', '=', 1)->get();
        $tiempos_experiencia = array(
            "sin experiencia",
        "menos de un año",
        "de uno a tres años",
        "de tres a cinco años",
        "de cinco a diez años",
        "de diez a quince años",
        "más de quince años");

        foreach ($candidatosUsuarios as $user) {

            CandidateInformation::query()->create([
                'user_id' => $user->id,
                'cargo_desempenado_id' => CargoDesempenado::all()->random()->id,
                'tiempo_experiencia' => $tiempos_experiencia[random_int(0, count($tiempos_experiencia) - 1)]
            ]);

        }

    }
}
