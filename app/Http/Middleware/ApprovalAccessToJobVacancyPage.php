<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApprovalAccessToJobVacancyPage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $isAuthenticated = false;
        $approvalOfAccessToCandidate = true;

        if (!Auth::guest()) {
            $isAuthenticated = true;
            $approvalOfAccessToCandidate = auth()->user()->candidate_information !== null;
        }


        // Si está autenticado y no tiene un perfil de candidato con todos sus datos
        if ($isAuthenticated && !$approvalOfAccessToCandidate) {
            // redireccionamos al formulario para completar todos sus datos
            return redirect()->route('llenar-datos-candidato');
        }

        return $next($request);
    }
}
