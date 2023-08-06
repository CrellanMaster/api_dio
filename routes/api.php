<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('vagasanalise', 'App\Http\Controllers\APIController@index')->name('vagas.index');
Route::get('vagasanalise/{vaga}', "App\Http\Controllers\APIController@getVaga")->name('vagas.get');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
