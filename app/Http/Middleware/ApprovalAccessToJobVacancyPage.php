<?php

namespace App\Http\Middleware;

use App\Http\ClassServices\CandidateProfileProcess;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApprovalAccessToJobVacancyPage
{

    public function handle(Request $request, Closure $next)
    {
        $approvalOfAccessToCandidate = true;

        if (CandidateProfileProcess::isAuthenticated()) {
            $approvalOfAccessToCandidate = CandidateProfileProcess::hasCandidateProfile();
        }


        // Si está autenticado y no tiene un perfil de candidato con todos sus datos
        if (CandidateProfileProcess::isAuthenticated()/* && !$approvalOfAccessToCandidate*/) {
            // redireccionamos al formulario para completar todos sus datos
            return redirect()->route('llenar-datos-candidato');
        }

        return $next($request);
    }
}
