<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $categorias_extras = array("Administración",
    "Almacenamiento",
    "Apoyo de Oficina",
    "Banca | Servicios Financieros",
    "Call Center",
    "Compras",
    "Finanzas | Contabilidad | Auditoría",
    "Informática | Internet",
    "Mantenimiento",
    "Mercadeo | Ventas",
    "Operaciones | Logística",
    "Producción | Ingeniería | Calidad",
    "Publicidad | Comunicaciones | Servicios",
    "Puestos Profesionales",
    "Recursos Humanos",
    "Restaurantes",
    "Salud",
    "Telecomunicaciones",
    "Varios");

        DB::table('categorias')->insert([
            'categoria' => 'Backend Developer',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Front end Developer',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Mobile Developer',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'UX / UI Design',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Software Architecture',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Devops - Software',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        foreach ($categorias_extras as $categoria ){
            Categoria::query()->create([
                'categoria' => $categoria
            ]);
        }
    }
}
