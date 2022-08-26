<?php

namespace App\Http\Livewire;

use App\Http\ClassServices\CandidateProfileProcess;
use Livewire\Component;

class PostularVacanteMatch extends Component
{

    public $isApproved;
    public $vacante_id;

    public function mount () {

    }

    public function getConditionalsCandidateProfile () {
        $user = auth()->user();
        $haveCVComplete = CandidateProfileProcess::hasCandidateProfileComplete();
        $experiencias_laborales_user = $user->candidate_information->experiencias_laborales;
        $categoria_de_cada_experiencia = [];
        $cargos_desempenados_de_cada_experiencia = [];
        foreach ($experiencias_laborales_user as $experience) {
            array_push($categoria_de_cada_experiencia, $experience->categoria_id);
        }
        foreach ($experiencias_laborales_user as $experience) {
            array_push($cargos_desempenados_de_cada_experiencia, $experience->cargo_desempenado_id);
        }

        return [
            'haveCVComplete' => $haveCVComplete,
            'categorias_laborales_id' => $categoria_de_cada_experiencia,
            'cargos_laborales_id' => $cargos_desempenados_de_cada_experiencia,
            'annos_de_experiencia' => $user->candidate_information->tiempo_experiencia
        ];
    }

    public function validateCandidateProfileMatchToJobVacancy () {

    }

    public function render()
    {
        return view('livewire.postular-vacante-match');
    }
}
