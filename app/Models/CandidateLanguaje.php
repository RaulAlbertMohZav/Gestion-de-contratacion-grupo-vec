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

    public function base_idioma () {
        return $this->belongsTo(BaseIdiomas::class);
    }

    public function candidate_information () {
        return $this->belongsTo(CandidateInformation::class);
    }
}
