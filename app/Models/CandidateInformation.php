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

}
