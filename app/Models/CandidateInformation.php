<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateInformation extends Model
{
    use HasFactory;

    protected $table = "candidate_informations";

    protected $fillable = [
        "user_id",
        "categoria_id",
        "tiempo_experiencia",
    ];

    public function user () {
        return $this->belongsTo(User::class);
    }

    public function categoria () { // Expectativa laboral
        return $this->belongsTo(Categoria::class);
    }

    public function experiencia_laboral () {
        return $this->hasMany(ExperienciaLaboral::class);
    }

    public function candidate_languaje () {
        return $this->hasMany(CandidateLanguaje::class);
    }

    public function educacion () {
        return $this->hasMany(Educacion::class);
    }
}