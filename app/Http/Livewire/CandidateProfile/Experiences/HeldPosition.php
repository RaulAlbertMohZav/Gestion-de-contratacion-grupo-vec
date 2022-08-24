<?php

namespace App\Http\Livewire\CandidateProfile\Experiences;

use App\Models\CargoDesempenado;
use App\Models\Categoria;
use Livewire\Component;

class HeldPosition extends Component
{

    public $heldPositionSelected;
    public $heldPositions = [];
    public $categorySelectedUpdate;
    protected $listeners = [
        "getCategorySelectedEmit",
    ];

    public function updatedHeldPositionSelected () {
        $this->emit('getHeldPositionSelectedEmit', $this->heldPositionSelected);
    }

    public function getCategorySelectedEmit ($category_id) {
        $this->heldPositions = Categoria::query()->findOrFail($category_id)->cargos_desempenados;
    }

    public function mount () {
        if ($this->categorySelectedUpdate !== null) {
            $this->heldPositions = Categoria::query()->find($this->categorySelectedUpdate)->cargos_desempenados;
        }
    }

    /*public function categoryLoadHeldPosition ($category_id) {

        if ($category_id !== null) {
            $this->heldPositions = Categoria::query()->find($category_id)->cargos_desempenados;
        }
    }*/

    public function render()
    {
        return view('livewire.candidate-profile.experiences.held-position');
    }
}
