<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienciaLaboral extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre_cargo",
        "compania",
        'pais_id',
        "actividad_id",
        "compania",
        "cargo_desempenado",
        "rango_inicial_salario",
        "rango_final_salario",
        "fecha_inicio_trabajo",
        "fecha_final_trabajo",
        "beneficios",
        "descripcion",
        "candidate_information_id"
    ];

    protected $casts = [
        "fecha_inicio_trabajo" => "date",
        "fecha_final_trabajo" => "date",
    ];

    public function pais () {
        return $this->belongsTo(Pais::class);
    }

    public function actividad_id () {
        return $this->belongsTo(Actividad::class);
    }

    public function candidate_information () {
        return $this->belongsTo(CandidateInformation::class);
    }
}
