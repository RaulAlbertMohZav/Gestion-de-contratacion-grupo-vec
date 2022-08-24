<?php

namespace Database\Seeders;

use App\Models\Actividad;
use App\Models\CandidateInformation;
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
     * Run the database seeds
     *
     * @return void
     */
    public function run()
    {
        $candidatos = CandidateInformation::all();

        // encontrar mas cargos laborales de ejemplo
        // http://www1.pivot.com.py/Estadisticas/Oferta-de-Curriculums/Experiencia-en-Cargos-Genericos
        /*$cargos_laborales = [
            "Gerente Comercial",
            "Gerente de Ventas",
            "Subgerente de Ventas",
            "Supervisor de Ventas",
            "Vendedor",
            "Vendedor de Salón Comercial",
            "Promotor",
            "Administrativo Área Ventas",
            "Asistente de Ventas",
            "Preventista",
            "Encargado/ Asistente de Escrituraciones",
            "Gerente de Sucursal/ Unidad de Negocios",
            "Comercial Unidad de Negocios",
            "Encargado de Local Comercial",
            "Analista de Ventas",
            "Ejecutivo de Ventas/ Cuentas",
            "Ejecutivo de Ventas/ Cuentas Junior",
            "Desarrollador de Negocios",
            "Gerente de Marketing",
            "Supervisor de Marketing",
            "Ejecutivo de Marketing",
            "Gerente de Producto (Marketing)",
            "Investigador de Mercado",
            "Encuestador Área Marketing",
            "Analista de Marketing",
            "Analista de Marketing Junior",
            "Analista de Trade Marketing",
            "Asistente de Marketing",
            "Community Manager",
            "Encargado de Stock Comercio Minorista - Merchandiser",
            "Brand Manager",
            "Gerente de Canal",
            "Supervisor de Telemarketing",
            "Gerente General",
            "Gerente Propietario",
            "Consultor Gerente/ Jefe de Planificación",
            "Consultor Analista de Planificación",
            "Consultor Asistente de Planificación",
            "Secretaria(o) de Gerencia/ Directorio",
            "Gerente de Relaciones Públicas",
            "Asistente de Relaciones Públicas",
            "Auditor Senior",
            "Auditor",
            "Gerente Área Informática",
            "Encargado de Informática",
            "Asistente Informático",
            "Gerente de Análisis de Sistemas",
            "Arquitecto de Sistemas Informáticos",
            "Analista de Sistemas Informáticos",
            "Analista de Sistemas Informáticos Junior",
            "Jefe de Organización y Métodos",
            "Analista de Organización y Métodos",
            "Analista de Organización y Métodos Junior",
            "Gerente de Desarrollo de Sistemas",
            "Analista Programador",
            "Programador Senior",
            "Programador",
            "Programador Junior",
            "Tester de Control de Calidad de Software",
            "Técnico en Implementación de Sistemas Informáticos",
            "Gerente de Infraestructura Tecnológica",
            "Encargado en Infraestructura Tecnológica",
            "Jefe de Procesamiento de Datos",
            "Administrador de Base de Datos",
            "Administrador de Redes/ Servidores",
            "Webmaster",
            "Digitador/ Operador de Computadoras",
            "Encargado o Asistente de Codificación",
            "Jefe de Seguridad Informática",
            "Auditor Informático",
            "Jefe Desarrollo Web",
            "Desarrollador Web",
            "Desarrollador Web Junior",
            "Jefe de Soporte a Usuarios de Informática",
            "Soporte a Usuarios de Informática- Help Desk",
            "Instructor de Informática",
            "Técnico en Investigación y Desarrollo en Informática",
            "Técnico en Redes de Área Local",
            "Técnico en Redes y Servidores",
            "Gerente de Producción Industrial",
            "Supervisor de Producción Industrial",
            "Analista de Procesos Industriales",
            "Consultor de Procesos Industriales",
            "Gerente de Investigación y Desarrollo Industrial",
            "Asistente de Investigación y Desarrollo Industrial",
            "Jefe de Laboratorio Industrial",
            "Técnico en Laboratorio Industrial",
            "Proyectista/ Diseñador Industrial",
            "Proyectista / Diseñador Industrial - Asistente",
            "Gerente de Planta Industrial",
            "Jefe de Planificación de la Producción Industrial",
            "Consultor en Ingeniería Industrial",
            "Asistente de Procesos Industriales",
            "Supervisor de Planta Industrial",
            "Asistente de Planta Industrial",
            "Jefe de Turno (Producción Industrial)",
            "Operario de Industria (general) *",
            "Operador de Máquinas/ Equipamiento Industriales *",
            "Jefe de Mantenimiento Industrial",
            "Técnico en Mantenimiento Industrial",
            "Gerente de Control de Calidad Industrial",
            "Técnico en Control de Calidad Industrial",
            "Asistente de Control de Calidad Industrial",
            "Técnico en Seguridad e Higiene Industrial",
            "Ingeniero Industrial Junior",
            "Ingeniero de Producción Industrial",
            "Ingeniero de Producción Industrial Junior",
            "Ingeniero de Producción Industrial Senior",
            "Ingeniero",
            "Gerente de Recursos Humanos",
            "Encargado de Recursos Humanos",
            "Auxiliar de Recursos Humanos",
            "Encargado de Desarrollo Organizacional",
            "Encargado de Reclutamiento y/o Selección",
            "Encargado de Administración de Personal",
            "Liquidador de Sueldos y Jornales",
        ]; */

        foreach ($candidatos as $candidato) {
            $factoryInstance = Factory::create();
            $categoria_query = Categoria::all()->random();
            $cargo_desempenado_random = $categoria_query->cargos_desempenados->random();

            ExperienciaLaboral::query()->create([
                "nombre_cargo" => $cargo_desempenado_random->cargo_desempenado,
                "compania" => $factoryInstance->company(),
                'pais_id' => Pais::all()->random()->id,
                "actividad_id" => Actividad::all()->random()->id,
                "categoria_id" => $categoria_query->id,
                "cargo_desempenado_id" => $cargo_desempenado_random->id,
                "salario_id" => Salario::all()->random()->id,
                "fecha_inicio_trabajo" => now()->addDays(random_int(1,5))->addMonths(random_int(1,2))->subYears(random_int(1,3))->format('Y-m-d'),
                "fecha_final_trabajo" => now()->addDays(random_int(5,10))->addMonths(random_int(2,4))->format('Y-m-d'),
                "beneficios" => 'Bonos, Comisiones, Cuota de alimentación, Seguro de vida',
                "descripcion" => "Lorem Ipsum es simplemente un texto ficticio de la industria de la impresión y la composición tipográfica Lorem Ipsum ha sido el texto ficticio estándar de la industria desde el año 1500, cuando un impresor desconocido tomó una galera de tipos y la codificó para hacer un libro de muestras tipográficas Ha sobrevivido no solo cinco siglos, sino también el salto a la composición tipográfica electrónica, permaneciendo esencialmente sin cambios Se popularizó en la década de 1960 con el lanzamiento de hojas de Letraset que contenían pasajes de Lorem Ipsum y, más recientemente, con software de autoedición como Aldus PageMaker, que incluía versiones de Lorem Ipsum",
                "candidate_information_id" => $candidato->id
            ]);
        }
    }
}
