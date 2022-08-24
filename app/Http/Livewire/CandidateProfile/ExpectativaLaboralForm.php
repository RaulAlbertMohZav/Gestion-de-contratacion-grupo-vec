<?php

namespace App\Http\Livewire\CandidateProfile;

use App\Http\ClassServices\CandidateProfileProcess;
use App\Models\CandidateInformation;
use App\Models\CargoDesempenado;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ExpectativaLaboralForm extends Component
{

    public $categorySelected;
    public $categories;

    protected $rules = [
        'categorySelected' => ['required', 'exists:categorias,id']
    ];

    public $validationAttributes = [
        "categorySelected" => "Expectativa Laboral"
    ];

    public function mount() {

        if (CandidateProfileProcess::hasCandidateProfile()) {
            $this->categorySelected = CandidateProfileProcess::getCandidateProfile()->categoria_id;
        }
        $this->getCategories();
    }

    public function getCategories () {
        $this->categories = CargoDesempenado::all();
    }


    // Validacion del formulario en tiempo real
    public function updated ($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function updatedCategorySelected () {
        $this->validate();

        if (CandidateProfileProcess::hasCandidateProfile()) {
            auth()->user()->candidate_information()->update([
                "categoria_id" => $this->categorySelected
            ]);
        } else {
            CandidateInformation::query()->create([
                "user_id" => auth()->user()->id,
                "categoria_id" => $this->categorySelected
            ]);
        }



        $this->emit('toJSEmit-CategoryForCandidateSaved');
    }

    public function render()
    {
        return view('livewire.candidate-profile.expectativa-laboral-form');
    }
}
