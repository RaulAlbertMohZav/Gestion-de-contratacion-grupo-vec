<?php

namespace Database\Seeders;

use App\Models\Actividad;
use App\Models\CandidateInformation;
use App\Models\CandidatoBeneficio;
use App\Models\Categoria;
use App\Models\ExperienciaLaboral;
use App\Models\Pais;
use App\Models\Salario;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienciaLaboralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $candidatos = CandidateInformation::all();

        foreach ($candidatos as $candidato) {
            $factoryInstance = Factory::create();
            $categoria_query = Categoria::all()->random();

            ExperienciaLaboral::query()->create([
                "nombre_cargo" => $factoryInstance->title(),
                "compania" => $factoryInstance->company(),
                'pais_id' => Pais::all()->random()->id,
                "actividad_id" => Actividad::all()->random()->id,
                "categoria_id" => $categoria_query->id,
                "cargo_desempenado_id" => $categoria_query->cargos_desempeñados->random()->id,
                "salario_id" => Salario::all()->random()->id,
                "fecha_inicio_trabajo" => now()->addDays(random_int(1,5))->addMonths(random_int(1,2))->subYears(random_int(1,3)),
                "fecha_final_trabajo" => now()->addDays(random_int(5,10))->addMonths(random_int(2,4)),
                "beneficios" => 'Bonos, Comisiones, Cuota de alimentación, Seguro de vida',
                "descripcion" => "Lorem Ipsum es simplemente un texto ficticio de la industria de la impresión y la composición tipográfica. Lorem Ipsum ha sido el texto ficticio estándar de la industria desde el año 1500, cuando un impresor desconocido tomó una galera de tipos y la codificó para hacer un libro de muestras tipográficas. Ha sobrevivido no solo cinco siglos, sino también el salto a la composición tipográfica electrónica, permaneciendo esencialmente sin cambios. Se popularizó en la década de 1960 con el lanzamiento de hojas de Letraset que contenían pasajes de Lorem Ipsum y, más recientemente, con software de autoedición como Aldus PageMaker, que incluía versiones de Lorem Ipsum.",
                "candidate_information_id" => $candidato->id
            ]);
        }
    }
}
