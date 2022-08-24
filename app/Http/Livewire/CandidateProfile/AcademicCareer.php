<?php

namespace App\Http\Livewire\CandidateProfile;

use App\Models\Educacion;
use Illuminate\Validation\Rule;
use Livewire\Component;

class AcademicCareer extends Component
{

    public Educacion $education;
    public $scholarships = ['secundaria', 'universidad', 'otro curso'];

    protected $listeners = [
        "getCountrySelectedEmit"
    ];

    public $validationAttributes = [];

    public function getCountrySelectedEmit ($country_id) {
        $this->education->pais_id = $country_id;
        $this->validateOnly('education.pais_id');
    }

    public function mount (Educacion $education) {
        $this->education = $education;
    }

    public function rules () {
        return [
            "education.escolaridad" => ['required', Rule::in(['secundaria', 'universidad', 'otro curso'])],
            "education.titulo" => ['required', 'max:100'],
            "education.nombre_institucion" => ['required', 'max:100'],
            "education.ano_finalizacion" => ['required', 'integer'],
            "education.pais_id" => ['required', 'exists:pais,id'],
        ];
    }

    public function updated ($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function saveEducation () {
        $this->validate();

        $isUpdated = $this->education->id;

        if ($isUpdated === null) {
            $this->education->candidate_information_id = auth()->user()->candidate_information->id;
        }

        $this->education->save();

        $this->emit('ToJS-AcademicCareerSaved');

        $this->redirectRoute('llenar-datos-candidato');
    }

    public function render()
    {
        return view('livewire.candidate-profile.academic-career');
    }
}
