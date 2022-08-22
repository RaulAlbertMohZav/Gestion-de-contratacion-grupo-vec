<?php

namespace App\Http\Middleware;

use App\Http\ClassServices\CandidateProfileProcess;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApprovalAccessToJobVacancyPage
{

    public $candidateProfileService;

    public function __construct(CandidateProfileProcess $candidateProfileProcess)
    {
        $this->candidateProfileService = $candidateProfileProcess;
    }

    public function handle(Request $request, Closure $next)
    {
        $approvalOfAccessToCandidate = true;

        if ($this->candidateProfileService->isAuthenticated()) {
            $approvalOfAccessToCandidate = $this->candidateProfileService->hasCandidateProfile();
        }


        // Si está autenticado y no tiene un perfil de candidato con todos sus datos
        if ($this->candidateProfileService->isAuthenticated() && !$approvalOfAccessToCandidate) {
            // redireccionamos al formulario para completar todos sus datos
            return redirect()->route('llenar-datos-candidato');
        }

        return $next($request);
    }
}
