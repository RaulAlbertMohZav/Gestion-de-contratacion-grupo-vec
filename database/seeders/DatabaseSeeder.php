<?php

namespace Database\Seeders;

use App\Models\Salario;
use App\Models\User;
use App\Models\Vacante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ActividadSeeder::class);
        $this->call( CategoriasSeeder::class );
        $this->call(BaseIdiomasSeeder::class );
        $this->call( CargoDesempenadoSeeder::class );
        $this->call( SalarioSeeder::class );
        $this->call(UsuariosSeeder::class);
        $this->call(PaisSeeder::class );
        $this->call(CandidatoInformationSeeder::class);
        $this->call(ExperienciaLaboralSeeder::class);
        //Salario::factory()->count(25)->create();
        $this->call(CandidatoSeeder::class );

        Vacante::factory()->count(70)->create();

    }
}
