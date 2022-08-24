<?php

namespace App\Http\Livewire\CandidateProfile\Experiences;

use App\Models\Salario;
use Livewire\Component;

class Salary extends Component
{

    public $salarySelected;
    public $salaries;

    public function updatedSalarySelected () {
        $this->emit('getSalarySelectedEmit', $this->salarySelected);
    }

    public function mount () {
        $this->salaries = Salario::all();
        //$this->emit('categoryLoadHeldPosition', $this->categorySelected);
    }


    public function render()
    {
        return view('livewire.candidate-profile.experiences.salary');
    }
}
