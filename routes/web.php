<?php

use App\Http\Controllers\CandidatosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\VacanteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class )->middleware('approval_access_to_job_vacancy_page')->name('home');

Route::get('/dashboard', [VacanteController::class, 'index'])->middleware(['auth', 'verified', 'rol.reclutador'])->name('vacantes.index');
Route::get('/vacantes/create', [VacanteController::class, 'create'])->middleware(['auth', 'verified'])->name('vacantes.create');
Route::get('/vacantes/{vacante}/edit', [VacanteController::class, 'edit'])->middleware(['auth', 'verified'])->name('vacantes.edit');
Route::get('/vacantes/{vacante}', [VacanteController::class, 'show'])->name('vacantes.show');
Route::get('/candidatos/{vacante}', [CandidatosController::class, 'index'])->name('candidatos.index');

Route::get('/llenar-datos/candidato', \App\Http\Livewire\LlenarDatosCandidatoCuenta::class)->middleware(['auth', 'approval_access_to_edit_cv_page'])->name('llenar-datos-candidato');
Route::get('/ver-mi-cv', \App\Http\Livewire\CandidateProfile\WatchMyCv::class)->middleware(['auth', 'approval_access_to_watch_cv_page'])->name('ver-cv');
Route::get('edit/experience/{experienciaLaboral}', \App\Http\Livewire\CandidateProfile\ExperienciaLaboralForm::class)->name('edit.experience_work');
Route::get('create/experience', \App\Http\Livewire\CandidateProfile\ExperienciaLaboralForm::class)->name('create.experience_work');

Route::get('edit/education/{education}', \App\Http\Livewire\CandidateProfile\AcademicCareer::class)->name('edit.education');
Route::get('create/education', \App\Http\Livewire\CandidateProfile\AcademicCareer::class)->name('create.education');

Route::get('edit/languaje/{language}', \App\Http\Livewire\CandidateProfile\LanguajesForm::class)->name('edit.languaje');
Route::get('create/lenguaje', \App\Http\Livewire\CandidateProfile\LanguajesForm::class)->name('create.languaje');

// Notificaciones
Route::get('/notificaciones', NotificacionController::class)->middleware(['auth', 'verified', 'rol.reclutador'])->name('notificaciones');

require __DIR__.'/auth.php';
