<?php

namespace App\Http\Livewire\CandidateProfile;

use App\Models\ExperienciaLaboral;
use Livewire\Component;

class ExperienciaLaboralForm extends Component
{
    public ExperienciaLaboral $experienciaLaboral;

    public $validationAttributes = [];

    protected $listeners = [
        "getCountrySelectedEmit",
        "getActivitySelectedEmit",
        "getCategorySelectedEmit"
    ];

    public function getCountrySelectedEmit ($country_id) {
        $this->experienciaLaboral->pais_id = $country_id;
        $this->validateOnly('experienciaLaboral.pais_id');
    }

    public function getActivitySelectedEmit ($activity_id) {
        $this->experienciaLaboral->actividad_id = $activity_id;
        $this->validateOnly('experienciaLaboral.actividad_id');
    }
    public function getCategorySelectedEmit ($category_id) {
        $this->experienciaLaboral->categoria_id = $category_id;
        $this->validateOnly('experienciaLaboral.categoria_id');
    }

    public function rules () {
        return [
            'experienciaLaboral.nombre_cargo' => [
                'required', 'string', 'max:255'
            ],
            'experienciaLaboral.compania' => [
                'required', 'string', 'max:255'
            ],
            'experienciaLaboral.pais_id' => [
                'required', 'exists:pais,id'
            ],
            'experienciaLaboral.actividad_id' => [
                'required', 'exists:actividads,id'
            ],
            'experienciaLaboral.categoria_id' => [
                'required', 'exists:categorias,id'
            ],
            'experienciaLaboral.cargo_desempenado_id' => [
                'required', 'exists:cargo_desempenados,id'
            ],
            'experienciaLaboral.salario_id' => [
                'required', 'exists:salarios,id'
            ],
            'experienciaLaboral.fecha_inicio_trabajo' => [
                'required', 'exists:salarios,id'
            ],
            'experienciaLaboral.fecha_final_trabajo' => [
                'required', 'exists:salarios,id'
            ],
            'experienciaLaboral.beneficios' => [
                'required', 'max:255'
            ],
            'experienciaLaboral.descripcion' => [
                'required', 'max:255'
            ]
        ];
    }

    public function mount (ExperienciaLaboral $experienciaLaboral) {
        $this->experienciaLaboral = $experienciaLaboral;
        $this->emit('getCountryRecord', $experienciaLaboral->pais);
    }

    // Validacion del formulario en tiempo real
    public function updated ($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function saveExperienceWork () {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.candidate-profile.experiencia-laboral-form');
    }
}
