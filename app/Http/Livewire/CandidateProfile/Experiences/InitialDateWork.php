<?php

namespace App\Http\Livewire\CandidateProfile\Experiences;

use Livewire\Component;

class InitialDateWork extends Component
{

    public $initial_date_selected;


    public function render()
    {
        return view('livewire.candidate-profile.experiences.initial-date-work');
    }
}
