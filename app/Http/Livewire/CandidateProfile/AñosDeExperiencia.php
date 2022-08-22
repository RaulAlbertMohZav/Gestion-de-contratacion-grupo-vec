<?php

namespace App\Http\Livewire\CandidateProfile;

use App\Http\ClassServices\CandidateProfileProcess;
use App\Models\CandidateInformation;
use Illuminate\Validation\Rule;
use Livewire\Component;

class AñosDeExperiencia extends Component
{
    public $yearOfExperienceSelected;
    public $yearsOfExperience = [
        "sin experiencia",
        "menos de un año",
        "de uno a tres años",
        "de tres a cinco años",
        "de cinco a diez años",
        "de diez a quince años",
        "más de quince años"
    ];


    public function rules () {
        return [
            'yearOfExperienceSelected' => ['required', Rule::in($this->yearsOfExperience)]
        ];
    }

    public $validationAttributes = [
        "yearOfExperienceSelected" => "Años de experiencia laboral"
    ];

    public function mount() {

        if (CandidateProfileProcess::hasCandidateProfile()) {
            $this->yearOfExperienceSelected = CandidateProfileProcess::getCandidateProfile()->tiempo_experiencia;
        }
    }


    public function updatedYearOfExperienceSelected () {
        $this->validate();

        if (CandidateProfileProcess::hasCandidateProfile()) {
            auth()->user()->candidate_information()->update([
                "tiempo_experiencia" => $this->yearOfExperienceSelected
            ]);
        } else {
            CandidateInformation::query()->create([
                "user_id" => auth()->user()->id,
                "tiempo_experiencia" => $this->yearOfExperienceSelected
            ]);
        }

        $this->emit('toJSEmit-CategoryForCandidateSaved');
    }

    public function render()
    {
        return view('livewire.candidate-profile.años-de-experiencia');
    }
}
