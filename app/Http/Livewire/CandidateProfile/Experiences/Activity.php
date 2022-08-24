<?php

namespace App\Http\Livewire\CandidateProfile\Experiences;

use App\Models\Actividad;
use Livewire\Component;

class Activity extends Component
{

    public $activitySelected;
    public $activities;

    public function updatedActivitySelected () {
        $this->emit('getActivitySelectedEmit', $this->activitySelected);
    }

    public function mount () {
        $this->activities = Actividad::all();
    }

    public function render()
    {
        return view('livewire.candidate-profile.experiences.activity');
    }
}
