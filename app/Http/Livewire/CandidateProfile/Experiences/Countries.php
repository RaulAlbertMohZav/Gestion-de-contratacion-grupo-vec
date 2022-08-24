<?php

namespace App\Http\Livewire\CandidateProfile\Experiences;

use App\Models\Pais;
use Livewire\Component;

class Countries extends Component
{
    public $countrySelected;
    public $countries;

    public $rules = [
        "countrySelected" => ['required']
    ];

    public function updated ($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function updatedCountrySelected () {
        $this->validate();
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
