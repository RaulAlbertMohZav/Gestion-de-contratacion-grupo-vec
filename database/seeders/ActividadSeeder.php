<?php

namespace Database\Seeders;

use App\Models\Actividad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actividades = array(
            "eronaves | Astilleros",
            "Agencia de Reclutamiento",
            "grícola | Ganadera",
            "groindustria",
            "gua | Obras Sanitarias",
            "rquitectura | Diseño | Decoración",
            "utomotriz",
            "ancos | Financieras",
            "ienes Raices",
            "Bufete de Abogados",
            "Call Center",
            "Carpintería | Muebles",
            "Científica",
            "Combustibles (Gas | Petróleo)",
            "Comercial",
            "Comercio Mayorista (Intermediac. | Dist.)",
            "Comercio Minorista",
            "Confecciones",
            "Construcción",
            "Consultoría | Asesoría",
            "Consumo Masivo (Bebidas | Alimentos)",
            "Defensa",
            "Educación | Capacitación",
            "Electricidad (Distribución | Generación)",
            "Entretenimiento",
            "Estudios Jurídicos",
            "Exportación | Importación",
            "Farmacéutica",
            "Forestal | Papel | Celulosa",
            "Gobierno",
            "Hotelería | Turismo | Restaurantes",
            "Imprenta | Editoriales",
            "Industrial",
            "Ingeniería",
            "Inmobiliaria | Propiedades",
            "Internet",
            "Inversiones (Soc. | Cías. Holding)",
            "Logística | Distribución",
            "Manufacturas Varias",
            "Maquila",
            "Materiales de Construcción",
            "Medicina | Salud",
            "Medios de Comunicación",
            "Metalmecánica",
            "Minería",
            "Naviera",
            "Operaciones Portuarias",
            "Organizaciones sin Fines de Lucro",
            "Pesquera | Cultivos Marinos",
            "Petrolera",
            "Publicidad | Marketing | RRPP",
            "Química",
            "Seguros | Previsión",
            "Servicios",
            "Servicios Financieros Varios",
            "Servicios Varios",
            "Siderurgia",
            "Tecnologías de Información",
            "Telecomunicaciones",
            "Textil",
            "Transporte");
        //

        foreach ($actividades as $actividad) {
            Actividad::query()->create([
                "nombre_actividad" => $actividad
            ]);
        }
    }
}
