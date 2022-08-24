<?php

namespace App\Http\Livewire\CandidateProfile;

use App\Models\BaseIdiomas;
use Livewire\Component;

class LanguajesSelect extends Component
{

    public $languageSelected;
    public $languages;

    public function mount () {
        $this->languages = BaseIdiomas::all();
    }

    public function rules () {
        return [
            "languageSelected" => ['required', 'exists:base_idiomas,id']
        ];
    }

    public function updatedLanguageSelected () {
        $this->validate();
        $this->emit('getLanguageSelectedEmit', $this->languageSelected);
    }

    public function render()
    {
        return view('livewire.candidate-profile.languajes-select');
    }
}
