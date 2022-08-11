<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseIdiomas extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre_idioma"
    ];
}
