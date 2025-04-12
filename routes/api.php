<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\uApi;
use App\Http\Controllers\genApi;
use App\Http\Controllers\spApi;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/uApi',[uApi::class,'index']);
Route::get('/uApi/{name}',[uApi::class,'show']);

Route::get('/genApi',[genApi::class,'index']);
Route::get('/genapi/{name}',[genApi::class,'show']);

Route::get('/spApi',[spApi::class,'index']);
Route::get('/spApi/{name}',[spApi::class,'show']);