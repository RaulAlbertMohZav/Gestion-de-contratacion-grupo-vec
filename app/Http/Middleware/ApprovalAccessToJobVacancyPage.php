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
            $approvalOfAccessToCandidate = CandidateProfileProcess::hasCandidateProfileComplete();
        }


        // Si está autenticado y no tiene un perfil de candidato con todos sus datos

        if (CandidateProfileProcess::isAuthenticated()) {
            if (auth()->user()->rol === 1) {
                if (!$approvalOfAccessToCandidate) {
                    // redireccionamos al formulario para completar todos sus datos
                    return redirect()->route('llenar-datos-candidato');
                }
            } else {
                if (auth()->user()->rol === 2) {
                    return redirect()->route('vacantes.index');
                }
            }
        }




        return $next($request);
    }
}
