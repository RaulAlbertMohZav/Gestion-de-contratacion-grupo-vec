<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');



Artisan::command('vec:clear', function () {
    $this->call('cache:clear');
    $this->call('config:clear');
    $this->call('event:clear');
    /*$this->call('queue:clear');*/
    $this->call('config:cache');
    $this->call('optimize:clear');
    $this->call('optimize');
})->purpose('Optimiza la caché de la APP');


Artisan::command('vec:migrate', function () {
    $this->call('migrate:fresh');
    $this->call('db:seed');
    $this->call('vec:clear');
})->purpose('Borra tablas, realiza la migracion, ejecuta los seeders y optimiza la cache de la app');
