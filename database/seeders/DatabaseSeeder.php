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
        User::factory()->count(40)->create();
        $this->call(UsuariosSeeder::class);
        Salario::factory()->count(25)->create();
        $this->call( SalarioSeeder::class );
        $this->call( CategoriasSeeder::class );
        $this->call(ExperienciaLaboralSeeder::class );
        $this->call(CandidatoSeeder::class );
        $this->call(BaseIdiomasSeeder::class );
        Vacante::factory()->count(70)->create();
        $this->call(PaisSeeder::class );
    }
}
