<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperHeroController;


Route::get('/', function () {

    echo 'Hello guys! this is miy first laravel application';
    dump(Universe::all());
});

Route::get('/gender',[GenderController::class,'index']);
//Route::get('/universes',[UniverseController::class,'index']);

Route::resource('/universes',UniverseController::class);
Route::resource('/superheroes',SuperHeroController::class);
