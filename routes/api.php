<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RediteljController;
use App\Http\Controllers\GlumacController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['auth:sanctum']], function(){

// azurira se reditelj sa prosledjenim paramterom(id-ijem)
Route::put('reditelj/{reditelj}', [RediteljController::class, 'update']);
// brise reditelja
Route::delete('reditelj/{reditelj}', [RediteljController::class, 'destroy']);


// brisanje glumca
Route::delete('glumac/{glumac}', [GlumacController::class, 'destroy']);

Route::post('logout',[AuthController::class, 'logout']);
});
// Za reditelja
// vraca sve reditelje
Route::get('reditelj', [RediteljController::class, 'index']);
// vraca reditelja sa prosledjenim paramterom(id-ijem) 
Route::get('reditelj/{reditelj}', [RediteljController::class, 'show']);
// Za glumca
// vraca sve glumce
Route::get('glumac', [GlumacController::class, 'index']);
// Autentifikacija korisnika
Route::post('register',[AuthController::class, 'register']);
Route::post('login',[AuthController::class, 'login']);
