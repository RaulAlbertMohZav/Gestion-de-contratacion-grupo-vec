<?php

namespace App\Http\Livewire\CandidateProfile;

use Livewire\Component;

class Educations extends Component
{

    public $educations = [];

    public function mount () {
        $this->educations = auth()->user()->candidate_information->educaciones;
    }

    public function render()
    {
        return view('livewire.candidate-profile.educations');
    }
}
