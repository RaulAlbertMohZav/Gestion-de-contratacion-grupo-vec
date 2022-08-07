<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'name' => 'Raul Albert',
            'email' => 'ramz.162025@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('grupo_vec'),
            'rol' => 2,
        ]);
        User::query()->create([
            'name' => 'Raul Moh Zav',
            'email' => 'springh.trap@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('grupo_vec'),
            'rol' => 1,
        ]);
        User::query()->create([
            'name' => 'Erick CH',
            'email' => 'erick@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('grupo_vec'),
            'rol' => 2,
        ]);
    }
}
