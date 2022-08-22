<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $salarios = array(
            "menos de $200 quetzales",
            "$201 - $300 quetzales",
            "$301-$600 quetzales",
            "$601-$900 quetzales",
            "$901-$1200 quetzales",
            "$1201-$1500 quetzales",
            "$1501-$1800 quetzales",
            "$1801-$2100 quetzales",
            "$2101-$2400 quetzales",
            "$2401-$2700 quetzales",
            "$2701-$3000 quetzales",
            "$3001-$3300 quetzales",
            "$3301-$3600 quetzales",
            "$3601-$3900 quetzales",
            "$3901-$4200 quetzales",
            "$4201-$4500 quetzales",
            "$4501-$4800 quetzales",
            "$4801-$5100 quetzales",
            "$5101-$5400 quetzales",
            "$5401-$5700 quetzales",
            "$5701-$6000 quetzales",
            "más de $6000 quetzales",
        );

        DB::table('salarios')->insert([
            'salario' => '$0 - $499',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('salarios')->insert([
            'salario' => '$500 - $749',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('salarios')->insert([
            'salario' => '$750 - $999',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('salarios')->insert([
            'salario' => '$1000 - $1499',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('salarios')->insert([
            'salario' => '$1500 - $1999',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('salarios')->insert([
            'salario' => '$2000 - $2499',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('salarios')->insert([
            'salario' => '$2500 - $2999',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('salarios')->insert([
            'salario' => '$3000 - $4999',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('salarios')->insert([
            'salario' => '+$5000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
