<?php

namespace App\Http\Livewire\CandidateProfile;

use App\Models\User;
use Livewire\Component;

class WatchMyCv extends Component
{

    public $UserData;
    public $CandidateProfileData;
    public $JobExperiencesCandidate;
    public $EducationsCandidate;
    public $LanguagesCandidate;

    public function mount ($user = null) {
        if ($user === null) {
            $user = auth()->user();
        } else {
            $user = User::query()->findOrFail($user);
        }

        $this->UserData = $user;
        $this->CandidateProfileData = $user->candidate_information;
        $this->JobExperiencesCandidate = $user->candidate_information->experiencias_laborales;
        $this->EducationsCandidate = $user->candidate_information->educaciones;
        $this->LanguagesCandidate = $user->candidate_information->candidate_languajes;
    }

    public function render()
    {
        return view('livewire.candidate-profile.watch-my-cv')->layout('layouts.cv-page');
    }
}
