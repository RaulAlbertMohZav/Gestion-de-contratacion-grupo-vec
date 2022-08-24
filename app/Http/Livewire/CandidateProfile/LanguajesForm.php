<?php

namespace App\Http\Livewire\CandidateProfile;

use App\Models\CandidateLanguaje;
use Illuminate\Validation\Rule;
use Livewire\Component;

class LanguajesForm extends Component
{

    public CandidateLanguaje $language;

    public $language_levels = ['basico', 'intermedio', 'avanzado', 'nativo'];

    protected $listeners = ["getLanguageSelectedEmit"];

    public $validationAttributes = [];

    public function mount (CandidateLanguaje $language) {
        $this->language = $language;
    }

    public function rules () {
        return [
            'language.base_idioma_id' => ['required', 'exists:base_idiomas,id'],
            'language.nivel' => ['required', Rule::in(['basico', 'intermedio', 'avanzado', 'nativo'])],
        ];
    }

    public function getLanguageSelectedEmit ($language_id) {
        $this->language->base_idioma_id = $language_id;
        $this->validateOnly('language.base_idioma_id');
    }

    // Validacion del formulario en tiempo real
    public function updated ($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function saveLanguage () {
        $this->validate();

        $isUpdate = $this->language->id;

        if ($isUpdate === null) {
            $this->language->candidate_information_id = auth()->user()->candidate_information->id;
        }

        $this->language->save();

        $this->emit('ToJS-LanguageSaved');

        $this->redirectRoute('llenar-datos-candidato');
    }


    public function render()
    {
        return view('livewire.candidate-profile.languajes-form');
    }
}
