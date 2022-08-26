<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;

class LlenarDatosCandidatoCuenta extends Component
{

    public User $user;
    public $condicionales = [
        "Si",
        "No"
    ];

    public function rules () {
        return [
            'user.edad' => ['required', 'integer'],
            'user.telefono' => ['required', 'integer'],
            'user.nacionalidad' => ['required', 'max:50'],
            'user.zona_de_residencia' => ['required', 'max:70'],
            'user.tiene_vehiculo' => ['required', Rule::in(['Si', 'No'])],
            'user.tiene_licencia_vehiculo' => ['required', Rule::in(['Si', 'No'])],
        ];
    }

    public function redirectToJobVacanciesPage () {
        $this->redirectRoute('home');
    }

    public function mount () {
        $this->user = auth()->user();
    }

    public function updated ($attribute) {
        $this->validateOnly($attribute);
    }

    public function saveDataUserCV () {
        $this->validate();

        $this->user->save();

        $this->emit('ToJS-UserDataCVSaved');
    }

    public function render()
    {
        return view('livewire.llenar-datos-candidato-cuenta');
    }
}
