<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateLanguaje extends Model
{
    use HasFactory;

    protected $fillable = [
        "base_idioma_id",
        "nivel",
        "candidate_information_id",
    ];
}
