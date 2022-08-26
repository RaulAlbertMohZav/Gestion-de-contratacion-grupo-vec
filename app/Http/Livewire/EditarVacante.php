<?php

namespace App\Http\Livewire;

use App\Models\Salario;
use Illuminate\Validation\Rule;
use Livewire\Component;
use App\Models\Categoria;
use App\Models\Vacante;
use Illuminate\Support\Carbon;
use Livewire\WithFileUploads;

class EditarVacante extends Component
{
    public $vacante_id;
    public $titulo;
    public $salario;
    public $categoria;
    public $cargo_desempenado;
    public $cargos_desempenados = [];
    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;
    public $imagen_nueva;
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

    use WithFileUploads;

    public function rules () {
        return [
            'titulo' => 'required|string',
            'salario' => 'required',
            'categoria' => 'required|exists:categorias,id',
            'cargo_desempenado' => 'required|exists:cargo_desempenados,id',
            'empresa' => 'required',
            'ultimo_dia' => 'required',
            'descripcion' => 'required',
            /*'imagen' => ['nullable', Rule::when($this->imagen !== null, ['image', 'max:1024'])],*/
            'yearOfExperienceSelected' => ['required', Rule::in($this->yearsOfExperience)]
        ];
    }

    public function mount(Vacante $vacante)
    {
        $this->vacante_id = $vacante->id;
        $this->titulo = $vacante->titulo;
        $this->salario = $vacante->salario_id;
        $this->categoria = $vacante->categoria_id;
        $this->cargo_desempenado = $vacante->cargo_desempenado->id;
        $this->yearOfExperienceSelected = $vacante->tiempo_experiencia;
        $this->empresa = $vacante->empresa;
        $this->ultimo_dia = Carbon::parse( $vacante->ultimo_dia)->format('Y-m-d');
        $this->descripcion = $vacante->descripcion;
        $this->imagen = $vacante->imagen;

        $this->cargos_desempenados = $vacante->categoria->cargos_desempenados;
    }

    public function updatedCategoria () {
        $this->cargo_desempenado = null;
        $this->cargos_desempenados = Categoria::query()->find($this->categoria)->cargos_desempenados;
    }

    public function editarVacante()
    {
        $datos = $this->validate();

        // Si hay una nueva imagen
        if($this->imagen_nueva) {
            $imagen = $this->imagen_nueva->store('public/vacantes');
            $datos['imagen'] = str_replace('public/vacantes/', '', $imagen);
        }

        // Encontrar la vacante a editar
        $vacante = Vacante::find($this->vacante_id);

        // Asignar los valores
        $vacante->titulo = $datos['titulo'];
        $vacante->salario_id = $datos['salario'];
        $vacante->categoria_id = $datos['categoria'];
        $vacante->cargo_desempenado_id = $datos['cargo_desempenado'];
        $vacante->tiempo_experiencia = $datos['yearOfExperienceSelected'];
        $vacante->empresa = $datos['empresa'];
        $vacante->ultimo_dia = $datos['ultimo_dia'];
        $vacante->descripcion = $datos['descripcion'];
        //$vacante->imagen = $datos['imagen'] ?? $vacante->imagen;

        // Guardar la vacante
        $vacante->save();

        // redireccionar
        session()->flash('mensaje', 'La Vacante se actualizó Correctamente');

        return redirect()->route('vacantes.index');
    }

    public function render()
    {
        // Consultar BD
        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.editar-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias
        ]);
    }
}
