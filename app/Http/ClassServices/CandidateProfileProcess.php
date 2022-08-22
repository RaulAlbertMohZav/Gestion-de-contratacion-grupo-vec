<?php

namespace App\Http\ClassServices;

use Illuminate\Support\Facades\Auth;

class CandidateProfileProcess
{
    public $userAuth;
    public $isAuthenticated;

    public function __construct()
    {
        $this->userAuth = auth()->user();
        $this->isAuthenticated = !Auth::guest();
    }

    public function hasCandidateProfile (): bool {
        return $this->userAuth->candidate_information !== null;
    }

    public function isAuthenticated (): bool {
        return $this->isAuthenticated;
    }
}
