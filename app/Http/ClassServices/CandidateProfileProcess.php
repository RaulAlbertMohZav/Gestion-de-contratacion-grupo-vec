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

    public static function hasCandidateProfileRelationship () {
        self::initializeProperties();
        return self::$userAuth->candidate_information !== null;
    }

    public static function isAuthenticated () {
        self::initializeProperties();
        return self::$isAuthenticated;
    }

    public static function hasCandidateProfile() {
        self::initializeProperties();
        return (self::$userAuth->candidate_information !== null &&
        self::$userAuth->candidate_information->cargo_desempenado !== null &&
            self::$userAuth->candidate_information->tiempo_experiencia !== null);
    }


    public static function hasOneExperienceJob() {
        self::initializeProperties();

        return (self::hasCandidateProfile() &&
            self::$userAuth->candidate_information->experiencias_laborales !== null &&
            self::$userAuth->candidate_information->experiencias_laborales->count() > 0
        );
    }

    public static function hasOneEducation () {
        self::initializeProperties();

        return (self::hasCandidateProfile() &&
            self::$userAuth->candidate_information->educaciones !== null &&
            self::$userAuth->candidate_information->educaciones->count() > 0
        );
    }

    public static function hasOneLanguaje () {
        self::initializeProperties();

        return (self::hasCandidateProfile() &&
            self::$userAuth->candidate_information->candidate_languajes !== null &&
            self::$userAuth->candidate_information->candidate_languajes->count() > 0
        );
    }


    public static function hasProfileUserCVComplete () {
        self::initializeProperties();

        return (self::hasCandidateProfile() &&
            self::$userAuth->edad !== null &&
            self::$userAuth->telefono !== null &&
            self::$userAuth->nacionalidad !== null &&
            self::$userAuth->zona_de_residencia !== null &&
            self::$userAuth->tiene_vehiculo !== null &&
            self::$userAuth->tiene_licencia_vehiculo !== null
        );
    }

    public static function hasCandidateProfileComplete () {
        self::initializeProperties();

        return (
            self::hasCandidateProfile() &&
            self::hasOneExperienceJob() &&
            self::hasOneEducation() &&
            self::hasOneLanguaje() &&
            self::hasProfileUserCVComplete() &&
            self::$userAuth->rol === 1
        );
    }
}
