<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educacion extends Model
{
    use HasFactory;

    protected $fillable = [
        "escolaridad",
        "titulo",
        "nombre_institucion",
        "año_finalizacion",
        "pais_id",
        "candidate_information_id",
    ];
}
