<?php

namespace App\Http\ClassServices;

use Illuminate\Support\Facades\Auth;

class CandidateProfileProcess
{
    public static $userAuth;
    public static $isAuthenticated;

    /*public function __construct()
    {
        self::$userAuth = auth()->user();
        self::$isAuthenticated = !Auth::guest();
    }*/

    public static function setUserAuth ($userAuth) {
        self::$userAuth = $userAuth;
    }
    public static function setIsAuthenticated ($isAuthenticated) {
        self::$isAuthenticated = $isAuthenticated;
    }

    public static function initializeProperties () {
        self::setUserAuth(auth()->user());
        self::setIsAuthenticated(!Auth::guest());
    }

    public static function getCandidateProfile () {
        self::initializeProperties();
        return self::$userAuth->candidate_information;
    }

    public static function hasCandidateProfile () {
        self::initializeProperties();
        return self::$userAuth->candidate_information !== null;
    }

    public static function isAuthenticated () {
        self::initializeProperties();
        return self::$isAuthenticated;
    }
}
