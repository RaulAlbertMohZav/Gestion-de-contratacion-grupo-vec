<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Salario;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacante>
 */
class VacanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->jobTitle(),
            'salario_id' => Salario::all()->random()->id,
            'categoria_id' => Categoria::all()->random()->id,
            'empresa' => $this->faker->company(),
            'ultimo_dia' => Carbon::now()->addDays(random_int(3,28))->addMonths(random_int(1,2)),
            'descripcion' => $this->faker->catchPhrase(),
            'imagen' => 'oU0EFTaOKEaAGChVcJvqzZGMqyMUIPJRpqFNBIrM.jpg', // Imagen random que debe estar en el storage
            'publicado' => 1,
            'user_id' => User::query()->where('rol', '=', 2)->get()->random()->id
        ];
    }
}
