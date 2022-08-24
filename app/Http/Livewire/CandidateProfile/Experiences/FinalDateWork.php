<?php

namespace App\Http\Livewire\CandidateProfile\Experiences;

use Livewire\Component;

class FinalDateWork extends Component
{

    public $final_date_selected;

    public function render()
    {
        return view('livewire.candidate-profile.experiences.final-date-work');
    }
}
