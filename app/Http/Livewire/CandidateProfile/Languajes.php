<?php

namespace App\Http\Livewire\CandidateProfile;

use Livewire\Component;

class Languajes extends Component
{
    public $languajes = [];

    public function mount () {
        $this->languajes = auth()->user()->candidate_information->candidate_languajes;
    }

    public function render()
    {
        return view('livewire.candidate-profile.languajes');
    }
}
