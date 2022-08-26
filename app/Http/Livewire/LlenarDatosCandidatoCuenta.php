<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LlenarDatosCandidatoCuenta extends Component
{
    public function redirectToJobVacanciesPage () {
        $this->redirectRoute('home');
    }

    public function render()
    {
        return view('livewire.llenar-datos-candidato-cuenta');
    }
}
