<?php

namespace App\Http\Livewire;

use App\Http\ClassServices\CandidateProfileProcess;
use App\Models\Candidato;
use App\Models\Vacante;
use App\Notifications\NuevoCandidato;
use Livewire\Component;

class PostularVacanteMatch extends Component
{

    public $isApproved;
    public $vacante_id;
    public $ItsTheFirstTimeYouApply;

    public function mount () {
        $this->isApproved = $this->validateCandidateProfileMatchToJobVacancy();
    }

    public function getConditionalsCandidateProfile () {
        $user = auth()->user();
        $haveCVComplete = CandidateProfileProcess::hasCandidateProfileComplete();
        $experiencias_laborales_user = $user->candidate_information->experiencias_laborales;
        $categoria_de_cada_experiencia = [];
        $cargos_desempenados_de_cada_experiencia = [];
        foreach ($experiencias_laborales_user as $experience) {
            array_push($categoria_de_cada_experiencia, $experience->categoria_id);
        }
        foreach ($experiencias_laborales_user as $experience) {
            array_push($cargos_desempenados_de_cada_experiencia, $experience->cargo_desempenado_id);
        }

        return [
            'haveCVComplete' => $haveCVComplete,
            'categorias_laborales_id' => $categoria_de_cada_experiencia,
            'cargos_laborales_id' => $cargos_desempenados_de_cada_experiencia,
            'annos_de_experiencia' => $user->candidate_information->tiempo_experiencia,
            'expectativa_laboral' => $user->candidate_information->cargo_desempenado
        ];
    }

    public function validateCandidateProfileMatchToJobVacancy () {
        $candidateData = $this->getConditionalsCandidateProfile();
        $vacancy = Vacante::query()->findOrFail($this->vacante_id);
        $categoryVacancy = $vacancy->categoria/*->categoria*/;
        $WorkJobVacancy = $vacancy->cargo_desempenado/*->cargo_desempenado*/;
        $yearsOfExperienceToVacancy = $vacancy->tiempo_experiencia;

        $matchingCategories = in_array($categoryVacancy->id, $candidateData['categorias_laborales_id'], true);
        $matchingJobWork = in_array($WorkJobVacancy->id, $candidateData['cargos_laborales_id'], true);
        $matchingYearsOfExperienceJob = $yearsOfExperienceToVacancy === $candidateData['annos_de_experiencia'];
        $candidateHaveProfileCompleteCV = CandidateProfileProcess::hasCandidateProfileComplete();
        $matchingExpectativaLaboral = (
            $candidateData['expectativa_laboral']->id === $vacancy->cargo_desempenado_id &&
            $matchingYearsOfExperienceJob
        );

        $this->ItsTheFirstTimeYouApply = (Candidato::query()->where('user_id', '=', auth()->user()->id)
            ->where('vacante_id', '=', $vacancy->id)
            ->first()) === null ;

        return (
            $candidateHaveProfileCompleteCV && $this->ItsTheFirstTimeYouApply && ($matchingExpectativaLaboral || $matchingJobWork )
        );
    }


    public function postularme()
    {

        $vacante = Vacante::query()->findOrFail($this->vacante_id);
        // Crear el candidato a la vacante
        $vacante->candidatos()->create([
            'user_id' => auth()->user()->id,
        ]);

        // Crear notificación y enviar el email
        $vacante->reclutador->notify(new NuevoCandidato($vacante->id, $vacante->titulo, auth()->user()->id ));

        // Mostrar el usuario un mensaje de ok
        session()->flash('mensaje', 'Se envió correctamente tu información, mucha suerte');

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.postular-vacante-match');
    }
}
