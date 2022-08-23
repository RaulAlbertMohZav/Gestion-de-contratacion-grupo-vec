<?php

namespace App\Http\Livewire\CandidateProfile;

use Livewire\Component;

class ExperienciasLaborales extends Component
{
    public function render()
    {
        return view('livewire.candidate-profile.experiencias-laborales', [
            'experiencias_laborales' => auth()->user()->candidate_information->experiencias_laborales
        ]);
    }
}
