<?php

use App\Http\Controllers\PagesController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginWithGoogleController;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Users;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/kontak', [PagesController::class, 'kontak']);
Route::get('/informasiberita', [PagesController::class, 'informasiberita']);
Route::get('/login', [PagesController::class, 'login']);
Route::get('/daftar', [PagesController::class, 'daftar']);
Route::get('/lupapassword', [PagesController::class, 'lupapassword']);
Route::get('/index2', [PagesController::class, 'index2']);
Route::get('/partisipan', [PagesController::class, 'partisipan']);
Route::get('/pesan', [PagesController::class, 'pesan']);
Route::get('/lomba', [PagesController::class, 'lomba']);
Route::get('/tambahlomba', [PagesController::class, 'tambahlomba']);
Route::get('/editlomba', [PagesController::class, 'editlomba']);
Route::get('/detaillomba', [PagesController::class, 'detaillomba']);
Route::get('/administrator', [PagesController::class, 'administrator']);
Route::get('/tambahadministrator', [PagesController::class, 'tambahadministrator']);
Route::get('/editadministrator', [PagesController::class, 'editadministrator']);
Route::get('/detailadministrator', [PagesController::class, 'detailadministrator']);
Route::get('/tim', [PagesController::class, 'tim']);
Route::get('/detailtim', [PagesController::class, 'detailtim']);
Route::get('/sponsor', [PagesController::class, 'sponsor']);
Route::get('/tambahsponsor', [PagesController::class, 'tambahsponsor']);
Route::get('/editsponsor', [PagesController::class, 'editsponsor']);
Route::get('/detailsponsor', [PagesController::class, 'detailsponsor']);
Route::get('/berita', [PagesController::class, 'berita']);
Route::get('/tambahberita', [PagesController::class, 'tambahberita']);
Route::get('/editberita', [PagesController::class, 'editberita']);
Route::get('/detailberita', [PagesController::class, 'detailberita']);
Route::get('/setting', [PagesController::class, 'setting']);
Route::get('/editsetting', [PagesController::class, 'editsetting']);
Route::get('/dashboardjuri', [PagesController::class, 'dashboardjuri']);
Route::get('/dashboardpetugas', [PagesController::class, 'dashboardpetugas']);
Route::get('/overviewpeserta', [PagesController::class, 'overviewpeserta'])->name('overviewpeserta');
Route::get('/profilpeserta', [PagesController::class, 'profilpeserta']);
Route::get('/notifikasipeserta', [PagesController::class, 'notifikasipeserta']);
Route::get('/reportpeserta', [PagesController::class, 'reportpeserta']);
Route::get('/daftarlomba', [PagesController::class, 'daftarlomba']);
Route::get('/datatim', [PagesController::class, 'datatim']);
Route::get('/anggotatim', [PagesController::class, 'anggotatim']);
Route::get('/pengumpulankarya', [PagesController::class, 'pengumpulankarya']);
Route::get('/proses', [PagesController::class, 'proses']);


//Login Auth Google
Route::controller(LoginWithGoogleController::class)->group(function(){
    Route::get('authorized/google', 'googlepage')->name('auth.google');
    Route::get('authorized/google/callback', 'googlecallback');
});


//Client Auth Controller
Route::POST('/admin/login-process', [ClientAuthController::class, 'processLoginAdmin']);
Route::POST('/login-process', [ClientAuthController::class, 'processLoginParticipant']);
Route::GET('/index2/logout', [ClientAuthController::class, 'processLogoutAdmin']);
Route::GET('/logout', [ClientAuthController::class, 'processLogoutUser']);


