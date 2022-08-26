<?php

namespace App\Http\Middleware;

use App\Http\ClassServices\CandidateProfileProcess;
use Closure;
use Illuminate\Http\Request;

class ApprovalAccessToWatchCVPage
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
        if (!CandidateProfileProcess::hasCandidateProfileComplete()) {
            return redirect()->route('llenar-datos-candidato');
        }

        return $next($request);
    }
}
