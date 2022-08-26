<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoDesempenado extends Model
{
    use HasFactory;

    protected $fillable = [
        "categoria_id",
        "cargo_desempenado",
    ];

    public function categoria () {
        return $this->belongsTo(Categoria::class);
    }

    public function vacantes () {
        return $this->hasMany(Vacante::class);
    }
}
