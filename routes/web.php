<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Models\Superhero;
use App\http\Controllers\GenderController;
use App\http\Controllers\UniverseController;
use App\http\Controllers\SuperheroController;

Route::get('/', function () {

    echo 'Hello guys! this is miy first laravel application',
    dump(Universe::all());
});

Route::resource('/universes',UniverseController::class);
Route::resource('/superheroes',SuperheroController::class);
Route::resource('/gender',GenderController::class);

//Route::get('/universes',[UniverseController::class,'index']);
