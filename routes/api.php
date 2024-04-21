<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Lombas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\RegistrasiAdministratorController;
use App\Http\Controllers\LombaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum', 'checkRole:admin,petugas,juri,user'])->get('/user', function (Request $request) {
    return $request->user();
});






Route::resource('/registrasi', RegistrasiController::class);

Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');

Route::controller(LoginWithGoogleController::class)->group(function(){
    Route::get('authorized/google', 'googlepage')->name('auth.google');
    Route::get('authorized/google/callback', 'googlecallback');
});


Route::resource('/registrasiadministrator', RegistrasiAdministratorController::class);


Route::post('/lomba', [LombaController::class, 'store']);



