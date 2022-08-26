<?php

namespace App\Http\Livewire;

use App\Models\CargoDesempenado;
use App\Models\Categoria;
use App\Models\Salario;
use App\Models\Vacante;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearVacante extends Component
{
    public $titulo;
    public $salario;
    public $categoria;
    public $cargo_desempenado;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;
    public $cargos_desempenados = [];
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
            'imagen' => 'required|image|max:1024',
            'yearOfExperienceSelected' => ['required', Rule::in($this->yearsOfExperience)]
        ];
    }

    public function getCargosLaboralesPorCategoria ($category_id) {
        $this->cargos_desempenados = Categoria::query()->find($category_id)->cargos_desempenados;
    }

    public function updatedCategoria () {
        $this->getCargosLaboralesPorCategoria(
            $this->categoria
        );
    }

    public function crearVacante()
    {
        $datos = $this->validate();

        // Almacenar la imagen
        $imagen = $this->imagen->store('public/vacantes');
        $datos['imagen'] = str_replace('public/vacantes/', '', $imagen);

        // dd($nombre_imagen);

        // Crear la Vacante
        Vacante::create([
            'titulo' => $datos['titulo'],
            'salario_id' => $datos['salario'],
            'categoria_id' => $datos['categoria'],
            'cargo_desempenado_id' => $datos['cargo_desempenado'],
            'tiempo_experiencia' => $datos['yearOfExperienceSelected'],
            'empresa' => $datos['empresa'],
            'ultimo_dia' => $datos['ultimo_dia'],
            'descripcion' => $datos['descripcion'],
            'imagen' => $datos['imagen'],
            'user_id' => auth()->user()->id,
        ]);


        // Crear un mensaje
        session()->flash('mensaje', 'La Vacante se publicó correctamente');


        // Redireccionar al usuario
        return redirect()->route('vacantes.index');
    }


    public function render()
    {
        // Consultar BD
        $salarios = Salario::all();
        $categorias = Categoria::all();
        $cargos_desempenados = CargoDesempenado::all();

        return view('livewire.crear-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias
        ]);
    }
}
