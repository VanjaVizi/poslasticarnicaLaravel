<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KorpaController;
use App\Http\Controllers\ProizvodController;
use App\Http\Controllers\StavkaKorpeController;
use App\Http\Controllers\UserController;
use App\Models\Korpa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
 

Route::group(['middleware' => ['auth:sanctum']], function () {  
    Route::get('/profiles', function (Request $request) {  
        return auth()->user();
    });
    Route::resource('stavkeKorpe', StavkaKorpeController::class ) ;
    Route::resource('korpe', KorpaController::class ) ; //sluzi za kreiranje prazne korpe kad se korinisk uloguje
    Route::post('/korpe/{id}', [KorpaController::class,'addProducts']); //dodajeProizvodUkorpu
   

    Route::post('logout', [AuthController::class, 'logout']);  
});


Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);

Route::get('proizvodi', [ProizvodController::class, 'index']);
Route::get('proizvodi/{id}', [ProizvodController::class, 'show']);