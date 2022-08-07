<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salario>
 */
class SalarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $salario_minimo = '$' . random_int(100, 9999);
        $salario_maximo = '$' . random_int(9999, 999999);
        return [
            'salario' => "{$salario_minimo} - {$salario_maximo}"
        ];
    }
}
