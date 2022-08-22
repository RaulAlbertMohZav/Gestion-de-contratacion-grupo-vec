<?php

namespace Database\Seeders;

use App\Models\CargoDesempenado;
use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CargoDesempenadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administracion = array(
             "Administrador",
             "Analista de Organización y Métodos",
             "Asistente a la Presidencia | Gerencia General",
             "Asistente Administrativo",
             "Asistente de Gerencia",
             "Gerente Administrativo",
             "Gerente de Pais",
             "Gerente de Planeación Estratégica",
             "Gerente de Planificación",
             "Gerente General | Director Ejecutivo",
             "Jefe Administrativo",
             "Jefe de Area",
             "Jefe de Planificación",
             "Jefe o Encargad@ de O y M",
             "Presidente",
             "Sub Gerente General",
        );

        $almacenamiento = array(
            "Asistente de Inventarios",
            "Auxiliar de Bodega",
            "Bodeguero",
            "Gerente de Bodega",
            "Gerente de Repuestos",
            "Jefe de Bodega",
            "Jefe de Inventario",
            "Montacarguista",
        );

        $apoyo_oficina = array(
            "Asistente de Oficina",
            "Auxiliar de Archivo",
            "Auxiliar de Tiempo",
            "Auxiliar General de Servicio",
            "Cobrador",
            "Conserje",
            "Digitador",
            "Jefe de Archivo",
            "Jefe de Seguridad",
            "Mensajero",
            "Oficial de Seguridad",
            "Recepcionista",
            "Recepcionista Bilingue",
            "Secretaria de Area | Departamento",
            "Secretaria de Gcia. General | Presidencia",
            "Secretaria Ejecutiva",
            "Secretaria Ejecutiva Bilingue",
        );

        $banca_servicios_financieros = array(
            "Analista de Activos Fijos",
            "Analista de Crédito",
            "Asistente de Activos Fijos",
            "Asistente de Cumplimiento | Auxiliar de Cumplimiento",
            "Asistente de Operaciones Financieras",
            "Cajer@ Bancario",
            "Corredor de Bolsa",
            "Ejecutiv@ Corporativo",
            "Ejecutiv@ de Afiliación | Tarjeta de Crédito",
            "Ejecutiv@ de Cuenta",
            "Ejecutiv@ Pyme",
            "Gerente de Agencia | Sucursal",
            "Gerente de Banca Electrónica",
            "Gerente de Crédito",
            "Gerente de Cuentas Pyme",
            "Gerente de Cumplimiento",
            "Gerente de Finanzas",
            "Gerente de Operaciones Bursátiles",
            "Gerente de Operaciones Financieras",
            "Gerente de Tarjeta de Crédito",
            "Gerente Departamento Internacional",
            "Gerente Legal",
            "Gestor de Riesgo",
            "Jefe de Activos Fijos",
            "Jefe de Agencia | Sucursal",
            "Jefe de Cumplimiento",
            "Jefe de Depósitos",
            "Jefe de Fideicomisos",
            "Jefe de Fraude de Tarjetas de Crédito",
            "Jefe de Inteligencia de Negocios",
            "Jefe de Riesgo",
            "Jefe de Tarjeta de Crédito",
            "Oficial de Cumplimiento",
            "Otros Puestos Bancarios",
            "Perito Valuador",
            "Superintendente",
            "Supervisor de Operaciones Financieras",
            "Tesorero",
        );

        $call_center = array(
            "Agente de Calidad",
            "Agente de Servicio",
            "Agente de Soporte",
            "Agente de Ventas",
            "Auditor de Calidad",
            "Coordinador de Calidad",
            "Ejecutiv@ de Call Center",
            "Gerente de Calidad",
            "Gerente de Call Center",
            "Jefe o Encargad@ de Call Center",
            "Lider de Equipo",
        );

        $compras = array(
            "Asistente de Compras",
            "Comprador",
            "Encargad@ de Licitaciones",
            "Gerente de Compras",
            "Jefe de Compras",
            "Planeador de Materiales",
        );

        $finanzas_contabilidad_auditorias = array(
            "Analista Financiero",
            "Asesor de Crédito",
            "Asesor Tributario",
            "Asistente Contable",
            "Asistente de Auditoría Externa",
            "Asistente de Auditoría Fiscal",
            "Asistente de Auditoría Interna",
            "Asistente de Contralor",
            "Asistente de Costos",
            "Asistente de Crédito y Cobro",
            "Asistente de Planillas",
            "Asistente Financiero",
            "Asistente o Encargad@ de Tesorería",
            "Auditor Externo",
            "Auditor Interno",
            "Auxiliar Contable",
            "Auxiliar de Créditos",
            "Auxiliar de Cuentas por Pagar/Cobrar",
            "Cajer@",
            "Contador de Costos",
            "Contador General",
            "Contralor",
            "Director de Finanzas y Administración",
            "Encargad@ de Planillas",
            "Gerente de Auditoría Interna",
            "Gerente de Contabilidad",
            "Gerente de Créditos | Cobros",
            "Gerente de Finanzas y Administración",
            "Gerente de Inversiones",
            "Gerente de Presupuestos",
            "Gerente de Tesorería",
            "Gestor de Cobros",
            "Jefe de Auditoría Externa",
            "Jefe de Auditoría Fiscal",
            "Jefe de Auditoría Interna",
            "Jefe de Caja",
            "Jefe de Contabilidad",
            "Jefe de Costos",
            "Jefe de Crédito y Cobro",
            "Jefe de Cuentas por Pagar/Cobrar",
            "Jefe de Facturación",
            "Jefe de Finanzas",
            "Jefe de Presupuestos",
            "Jefe de Tesorería",
            "Negociador de Divisas",
        );

        $informatica_internet = array(
            "Administrador de Base de Datos",
            "Administrador de Redes",
            "Analista | Programador",
            "Analista de Control de Calidad",
            "Analista de Seguridad Informatica",
            "Analista de Sistemas",
            "Arquitecto de Software",
            "Asistente de Sistemas",
            "Auditor de Sistemas",
            "Devops",
            "Director de Informática | Sistemas",
            "Diseñador Web",
            "Gerente de Informática | Sistemas",
            "Jefe de Arquitectura de Software&nbsp;| Jefe de Arquitectura IT",
            "Jefe de Auditoría de Sistemas",
            "Jefe de Desarrollo de Software | Jefe de Programación",
            "Jefe de Informática | Sistemas",
            "Jefe de Seguridad Informática",
            "Jefe de Soporte Técnico",
            "Operador de Sistemas",
            "Programador",
            "Soporte Técnico",
            "Técnico de Internet",
            "UI | UX",
            "Web Master",
        );

        $mantenimiento = array(
            "Albañil",
            "Aseador de Equipo",
            "Asistente de Mantenimiento",
            "Carpintero",
            "Electricista",
            "Electromecánico",
            "Gerente de Mantenimiento",
            "Gerente de Servicios",
            "Gerente de Talleres",
            "Jardinero",
            "Jefe de Calderas",
            "Jefe de Mantenimiento | Industrial",
            "Jefe de Pintura Automotriz",
            "Jefe de Taller Mecánico Eléctrico",
            "Mecánico",
            "Mecánico Automotriz",
            "Operador Maquinaria Pesada",
            "Pintor",
            "Pintor Automotriz",
            "Soldador",
            "Supervisor de Mantenimiento",
            "Técnico Chapistero",
            "Técnico de Calderas",
            "Técnico en Electrónica",
            "Técnico en Refrigeración",
            "Técnico Especializado",
        );

        $mercadeo_ventas = array(
            "Administrativo de Ventas | Soporte de Ventas",
            "Analista de Mercadeo | Investigación de Mercados",
            "Asistente de Mercadeo",
            "Asistente de Ventas",
            "Director Comercial",
            "Director de Mercadeo",
            "Display",
            "Edecan",
            "Ejecutiv@ de Telemarketing",
            "Ejecutiv@ de Ventas",
            "Ejecutiv@ de Ventas Industriales",
            "Ejecutiv@ de Ventas Técnicas",
            "Especialista en Ecommerce",
            "Gerente de Cuentas Claves",
            "Gerente de Marca | Producto",
            "Gerente de Mercadeo",
            "Gerente de Mercadeo Internacional | Exportaciones",
            "Gerente de Mercadeo y Ventas",
            "Gerente de Sucursal",
            "Gerente de Trade Marketing",
            "Gerente de Ventas",
            "Gerente de Ventas Técnicas",
            "Impulsador de Ventas",
            "Jefe de Impulsadoras | Display",
            "Jefe de Investigacion de Mercados",
            "Jefe de Marca | Producto",
            "Jefe de Mercadeo",
            "Jefe de Sucursal | Agencia",
            "Jefe de Telemarketing",
            "Jefe de Ventas",
            "Mercaderista | Merchandiser",
            "Prevendedor",
            "Promotor(a) de Ventas",
            "Supervisor de Promociones",
            "Supervisor de Ventas",
            "Trade Marketing",
            "Vendedor",
            "Vendedor de Mostrador | Interno",
            "Vendedor Rutero",
        );

        $operaciones_logistica = array(
            "Agente Aduanero | Tramitador Aduanal",
            "Asistente de Exportaciones | Importaciones",
            "Asistente de Operaciones",
            "Despachador",
            "Director de Operaciones",
            "Estibador",
            "Facturador",
            "Gerente de Flotas",
            "Gerente de Operaciones",
            "Gerente de Operaciones y Logística",
            "Jefe de Servicios Generales",
            "Jefe o Encargad@ de Despacho y | o Recepción",
            "Jefe o Encargad@ de Exportaciones | Importaciones",
            "Jefe o Encargad@ de Operaciones y Logística",
            "Jefe o Encargad@ de Transporte | Tráfico",
            "Planificador de Nave",
            "Supervisor de Rutas",
        );

        $producciones_ingenieria_calidad = array(
            "Asistente de Control de Calidad",
            "Asistente de Ingeniería",
            "Asistente de Laboratorio",
            "Asistente de Planificación de la Producción",
            "Asistente de Producción",
            "Auditor de Calidad",
            "Director de Producción",
            "Gerente de Control de Calidad",
            "Gerente de Ingeniería",
            "Gerente de Producción | Planta",
            "Gerente de Seguridad Industrial",
            "Ingeniero de Planta y Proceso",
            "Jefe de Control de Calidad",
            "Jefe de Ingeniería de Procesos",
            "Jefe de Laboratorio",
            "Jefe de Planificación de la Producción",
            "Jefe de Procesos o Sección",
            "Jefe de Producción",
            "Jefe o Encargad@ de Seguridad Industrial",
            "Manipulador de Alimentos",
            "Mecatrónico",
            "Oficial de Seguridad Industrial",
            "Operario de Producción",
            "Patronista",
            "Supervisor de Calidad",
            "Supervisor de Producción",
            "Técnico de Lubricación | Predictivo",
            "Tecnólogo en Alimentos",
        );

        $publicidad_comunicaciones_servicios = array(
            "Asistente de Comunicaciones | Relaciones Públicas",
            "Asistente de Publicidad",
            "Bocetista",
            "Community Manager",
            "Coordinador de Eventos",
            "Copywriter",
            "Dibujante por Computadora",
            "Director Creativo",
            "Diseñador Gráfico",
            "Editor",
            "Ejecutiv@ de Cuentas de Agencia de Publicidad",
            "Ejecutiv@ de Servicio al Cliente",
            "Gerente de Comunicaciones | Relaciones Públicas",
            "Gerente de Imagen Corporativa",
            "Gerente de Publicidad y Promoción",
            "Gerente de Servicio al Cliente",
            "Jefe de Comunicaciones",
            "Jefe de Prensa",
            "Jefe de Publicidad",
            "Jefe de Servicio al Cliente",
            "Jefe o Encargad@ Creativo",
            "Jefe o Encargad@ de Artes",
            "Periodista",
            "Productor",
            "Redactor",
            "Reportero",
            "Visualizador",
        );

        $puestos_profesionales = array(
            "Abogado",
            "Agrónomo",
            "Analista de Reclamos de Seguros",
            "Analista de Seguros",
            "Arquitecto",
            "Asesor Legal",
            "Asistente Técnico/Proyecto",
            "Biologo",
            "Consultor",
            "Corredor de Seguros",
            "Diseñador Industrial",
            "Encargado de Estadísticas",
            "Gerente de Area",
            "Gerente de Obras Civiles",
            "Gerente Técnico | Proyecto",
            "Ingeniero Biomédico",
            "Ingeniero Civil",
            "Ingeniero Eléctrico",
            "Ingeniero en Sistemas",
            "Ingeniero Industrial",
            "Ingeniero Mecánico",
            "Ingeniero Químico",
            "Jefe o Encargad@ Legal",
            "Jefe o Encargad@ Técnico | Proyecto",
            "Microbiólogo",
            "Oficial de Daños | Siniestros",
            "Piloto Aereo",
            "Sicólogo",
        );

        $recursos_humanos = array(
            "Analista de Recursos Humanos",
            "Asistente de Calidad Total",
            "Asistente de Recursos Humanos",
            "Coordinador de Rse",
            "Director de Recursos Humanos",
            "Encargad@ de Compensaciones",
            "Encargad@ de Desarrollo Organizacional",
            "Encargad@ de Reclutamiento",
            "Generalista de Recursos Humanos",
            "Gerente de Calidad Total",
            "Gerente de Capacitacion",
            "Gerente de Compensaciones/Beneficios",
            "Gerente de Desarrollo Organizacional",
            "Gerente de Recursos Humanos",
            "Gerente de Rse",
            "Jefe de Reclutamiento y Selección",
            "Jefe de Recursos Humanos",
            "Jefe o Encargad@ de Capacitación",
            "Reclutador",
        );

        $restaurantes = array(
            "Asistente de Cocina",
            "Barista",
            "Bartender",
            "Chef",
            "Cocinero",
            "Gerente de Restaurante",
            "Hostess | Anfitrión",
            "Jefe de Alimentos y Bebidas",
            "Jefe de Cocina",
            "Jefe de Meser@s",
            "Jefe de Restaurante",
            "Meser@",
            "Panader@",
            "Pastelero | Repostero",
            "Repartidor",
            "Subgerente de Restaurante",
        );

        $salud = array(
            "Asistente Dental",
            "Dependiente de Farmacia",
            "Enfermer@ Profesional | Auxiliar de Paramédico",
            "Farmacéutico",
            "Jefe de Farmacia",
            "Jefe de Laboratorio Clinico",
            "Masajista",
            "Mecánico Dental",
            "Médico",
            "Nutricionista",
            "Odontólogo",
            "Oftalmólogo",
            "Optometrista",
            "Radiólogo",
            "Regente",
            "Terapeuta",
            "Veterinario",
            "Visitador Médico",
        );

        $telecomunicaciones = array(
            "Gerente de Conmutación",
            "Gerente de Interconexión",
            "Gerente de Internet",
            "Gerente de Redes",
            "Gerente de Telecomunicaciones",
            "Gerente de Telefonía Celular",
            "Gerente de Transmisión",
            "Jefe o Encargad@ de Planta Externa",
            "Jefe o Encargad@ de Proyectos",
            "Técnico de Planta Externa",
            "Técnico en Redes",
            "Técnico en Telecomunicaciones",
        );

        $varios = array(
            "Actor",
            "Ama de Llaves",
            "Apoyo Escénico (Sonido-Vestuario-Maquillaje)",
            "Auxiliar de Vuelo | Aeromoza | Azafata",
            "Bailarín",
            "Bibliotecario",
            "Botones",
            "Camarógrafo",
            "Catedrático",
            "Chofer | Piloto",
            "Corredor de Propiedades",
            "Cosmetólog@",
            "Decorador | Diseñador de Interiores",
            "Dibujante",
            "Diseñador de Vestuario | Textil | Modas",
            "Ebanista",
            "Encuestador",
            "Entrenador",
            "Fotógrafo",
            "Guía Turístico",
            "Investigador Privado",
            "Jefe de Cabina",
            "Locutor",
            "Maestr@",
            "Marino",
            "Modelista | Sastre",
            "Modelo",
            "Músico",
            "Ninera",
            "Operador de Equipo Pesado",
            "Otros empleos",
            "Peluquero",
            "Personal de Tráfico Aéreo",
            "Plomero",
            "Poligrafista",
            "Presentador",
            "Procurador Judicial | Tramitador Jurídico",
            "Profesor Parvularia | Educación Inicial",
            "Propagandista",
            "Salvavidas",
            "Topógrafo",
            "Trabajador Social",
            "Traductor | intérprete",
            "Trainee",
            "Vacacionista",
            "Valet Parking",
        );


        // Administracion

        $administracion_query = Categoria::query()->firstWhere('categoria', '=', 'Administracion');

        $this->registrar_cargos_desempeñados_por_categoria($administracion, $administracion_query);

        // Almacenamiento

        $almacenamiento_query = Categoria::query()->firstWhere('categoria', '=', 'Almacenamiento');

        $this->registrar_cargos_desempeñados_por_categoria($almacenamiento, $almacenamiento_query);

        // Apoyo Oficina

        $apoyo_oficina_query = Categoria::query()->firstWhere('categoria', '=', 'Apoyo de Oficina');

        $this->registrar_cargos_desempeñados_por_categoria($apoyo_oficina, $apoyo_oficina_query);

        // Banca | Servicios | Financieros

        $banca_servicios_financieros_query = Categoria::query()->firstWhere('categoria', '=', 'Banca | Servicios Financieros');

        $this->registrar_cargos_desempeñados_por_categoria($banca_servicios_financieros, $banca_servicios_financieros_query);

        // Call Center

        $call_center_query = Categoria::query()->firstWhere('categoria', '=', 'Call Center');

        $this->registrar_cargos_desempeñados_por_categoria($call_center, $call_center_query);

        // Compras

        $compras_query = Categoria::query()->firstWhere('categoria', '=', 'Compras');

        $this->registrar_cargos_desempeñados_por_categoria($compras, $compras_query);

        // Finanzas | Contabilidad | Auditorias

        $finanzas_contabilidad_auditorias_query = Categoria::query()->firstWhere('categoria', '=', 'Finanzas | Contabilidad | Auditoría');

        $this->registrar_cargos_desempeñados_por_categoria($finanzas_contabilidad_auditorias, $finanzas_contabilidad_auditorias_query);

        // Informatica | Internet

        $informatica_internet_query = Categoria::query()->firstWhere('categoria', '=', 'Informática | Internet');

        $this->registrar_cargos_desempeñados_por_categoria($informatica_internet, $informatica_internet_query);

        // Mantenimiento

        $mantenimiento_query = Categoria::query()->firstWhere('categoria', '=', 'Mantenimiento');

        $this->registrar_cargos_desempeñados_por_categoria($mantenimiento, $mantenimiento_query);

        // Mercadeo | Ventas

        $mercadeo_ventas_query = Categoria::query()->firstWhere('categoria', '=', 'Mercadeo | Ventas');

        $this->registrar_cargos_desempeñados_por_categoria($mercadeo_ventas, $mercadeo_ventas_query);

        // Operaciones | Logistica

        $operaciones_logistica_query = Categoria::query()->firstWhere('categoria', '=', 'Operaciones | Logística');

        $this->registrar_cargos_desempeñados_por_categoria($operaciones_logistica, $operaciones_logistica_query);

        // Producciones | Ingenieria | Calidad

        $producciones_ingenieria_calidad_query = Categoria::query()->firstWhere('categoria', '=', 'Producción | Ingeniería | Calidad');

        $this->registrar_cargos_desempeñados_por_categoria($producciones_ingenieria_calidad, $producciones_ingenieria_calidad_query);

        // Publicidad | Comunicaciones | Servicios

        $publicidad_comunicaciones_servicios_query = Categoria::query()->firstWhere('categoria', '=', 'Publicidad | Comunicaciones | Servicios');

        $this->registrar_cargos_desempeñados_por_categoria($publicidad_comunicaciones_servicios, $publicidad_comunicaciones_servicios_query);

        // Puestos Profesionales

        $puestos_profesionales_query = Categoria::query()->firstWhere('categoria', '=', 'Puestos Profesionales');

        $this->registrar_cargos_desempeñados_por_categoria($puestos_profesionales, $puestos_profesionales_query);

        // Recursos Humanos

        $recursos_humanos_query = Categoria::query()->firstWhere('categoria', '=', 'Recursos Humanos');

        $this->registrar_cargos_desempeñados_por_categoria($recursos_humanos, $recursos_humanos_query);

        // Restaurantes

        $restaurantes_query = Categoria::query()->firstWhere('categoria', '=', 'Restaurantes');

        $this->registrar_cargos_desempeñados_por_categoria($restaurantes, $restaurantes_query);

        // Salud

        $salud_query = Categoria::query()->firstWhere('categoria', '=', 'Salud');

        $this->registrar_cargos_desempeñados_por_categoria($salud, $salud_query);

        // Telecomunicaciones

        $telecomunicaciones_query = Categoria::query()->firstWhere('categoria', '=', 'Telecomunicaciones');

        $this->registrar_cargos_desempeñados_por_categoria($telecomunicaciones, $telecomunicaciones_query);

        // Varios

        $varios_query = Categoria::query()->firstWhere('categoria', '=', 'Varios');

        $this->registrar_cargos_desempeñados_por_categoria($varios, $varios_query);




    }

    public function registrar_cargos_desempeñados_por_categoria ( $cargos, $queryCategoria) {

        if ($queryCategoria) {
            foreach ($cargos as $cargo) {
                CargoDesempenado::query()->create([
                    "categoria_id" => $queryCategoria->id,
                    "cargo_desempenado" => $cargo,
                ]);
            }
        }


    }
}
