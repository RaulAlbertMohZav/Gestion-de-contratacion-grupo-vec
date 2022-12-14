<?php

namespace App\Http\Livewire\CandidateProfile\Experiences;

use App\Models\Categoria;
use Livewire\Component;

class Category extends Component
{

    public $categorySelected;
    public $categories;

    public $rules = [
        "categorySelected" => ['required']
    ];

    public function updated ($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function updatedCategorySelected () {
        $this->validate();
        $this->emit('getCategorySelectedEmit', $this->categorySelected);
    }

    public function mount () {
        $this->categories = Categoria::all();
        //$this->emit('categoryLoadHeldPosition', $this->categorySelected);
    }

    public function render()
    {
        return view('livewire.candidate-profile.experiences.category');
    }
}
