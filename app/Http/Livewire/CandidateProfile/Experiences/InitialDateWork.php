<?php

namespace App\Http\Livewire\CandidateProfile\Experiences;

use Livewire\Component;

class InitialDateWork extends Component
{

    public $initial_date_selected;

    public $rules = [
        "initial_date_selected" => ['required']
    ];

    public function updated ($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.candidate-profile.experiences.initial-date-work');
    }
}
