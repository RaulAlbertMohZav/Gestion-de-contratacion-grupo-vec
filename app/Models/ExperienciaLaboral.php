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
        "categoria_id",
        "cargo_desempenado_id",
        "salario_id",
        "fecha_inicio_trabajo",
        "fecha_final_trabajo",
        "beneficios",
        "descripcion",
        "candidate_information_id"
    ];

    public function pais () {
        return $this->belongsTo(Pais::class);
    }

    public function actividad () {
        return $this->belongsTo(Actividad::class);
    }

    public function candidate_information () {
        return $this->belongsTo(CandidateInformation::class);
    }

    public function categoria () {
        return $this->belongsTo(Categoria::class);
    }

    public function cargo_desempenado () {
        return $this->belongsTo(CargoDesempenado::class);
    }

    public function salario () {
        return $this->belongsTo(Salario::class);
    }

}
