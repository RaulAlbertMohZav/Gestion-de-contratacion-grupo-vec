<?php

namespace App\Http\Livewire\CandidateProfile\Experiences;

use App\Models\Pais;
use Livewire\Component;

class Countries extends Component
{
    public $countrySelected;
    public $countries;

    public function updatedCountrySelected () {
        $this->emit('getCountrySelectedEmit', $this->countrySelected);
    }

    public function mount () {
        $this->countries = Pais::all();
    }

    public function render()
    {
        return view('livewire.candidate-profile.experiences.countries');
    }
}
