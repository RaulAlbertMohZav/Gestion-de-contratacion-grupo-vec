<?php

namespace App\Http\Middleware;

use App\Http\ClassServices\CandidateProfileProcess;
use App\Models\User;
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

        if (auth()->user()->rol === 1 && $request->route('user') !== (string) auth()->user()->id && $request->route('user') !== null) {
            if (!CandidateProfileProcess::hasCandidateProfileComplete()) {
                return redirect()->route('llenar-datos-candidato');
            }

            return redirect()->route('home');
        }

        if (auth()->user()->rol === 2) {
            if ($request->route('user') !== null) {
                $user = User::query()->find($request->route('user'));
                if ($user->rol === 1) {
                    return $next($request);
                }

                return redirect()->route('vacantes.index');

            } else {
                return redirect()->route('vacantes.index');
            }
        }

        return $next($request);
    }
}
