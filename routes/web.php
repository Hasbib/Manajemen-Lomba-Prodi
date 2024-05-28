<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PesanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/kontak', [PagesController::class, 'kontak'])->name('pesan.index');
Route::post('/kontak', [PesanController::class, 'store']);

Route::get('/informasiberita', [PagesController::class, 'informasiberita']);


Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::post('/login', [UsersController::class, 'show']);
Route::get('/daftar', [PagesController::class, 'daftar']);
Route::post('/daftar', [UsersController::class, 'store'])->name('daftar.store');


Route::get('/lupapassword', [PagesController::class, 'lupapassword']);
Route::get('/index2', [PagesController::class, 'index2'])->name('index2');
Route::get('/partisipan', [PagesController::class, 'partisipan']);
Route::get('/pesan', [PagesController::class, 'pesan']);
Route::get('/lomba', [PagesController::class, 'lomba']);
Route::get('tambahlomba', [PagesController::class, 'tambahlomba']);
Route::get('/editlomba', [PagesController::class, 'editlomba']);
Route::get('/detaillomba', [PagesController::class, 'detaillomba']);
Route::get('/administrator', [PagesController::class, 'administrator'])->name('administrator');


Route::get('/tambahadministrator', [PagesController::class, 'tambahadministrator']);
Route::post('/tambahadministrator', [UsersController::class, 'store'])->name('daftar.store');

Route::get('/kriteria', [PagesController::class, 'kriteria']);
Route::get('/tambahkriteria', [PagesController::class, 'tambahkriteria']);
Route::get('/editkriteria', [PagesController::class, 'editkriteria']);
Route::get('/detailkriteria', [PagesController::class, 'detailkriteria']);

Route::get('/editadministrator', [PagesController::class, 'editadministrator']);
Route::get('/detailadministrator', [PagesController::class, 'detailadministrator']);
Route::get('/tim', [PagesController::class, 'tim']);
Route::get('/tabeltim', [PagesController::class, 'tabeltim']);
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
Route::get('/tambahsetting', [PagesController::class, 'tambahsetting']);
Route::get('/rangking', [PagesController::class, 'rangking']);
Route::get('/tabelrangking', [PagesController::class, 'tabelrangking']);

Route::get('/dashboardjuri', [PagesController::class, 'dashboardjuri'])->name('dashboardjuri');
Route::get('/lombajuri', [PagesController::class, 'lombajuri']);
Route::get('/tabellomba', [PagesController::class, 'tabellomba']);
Route::get('/rangkingjuri', [PagesController::class, 'rangkingjuri']);
Route::get('/tabelrangkingjuri', [PagesController::class, 'tabelrangkingjuri']);
Route::get('/nilai', [PagesController::class, 'nilai']);
Route::get('/editnilai', [PagesController::class, 'editnilai']);
Route::get('/timdetailjuri', [PagesController::class, 'timdetailjuri']);

Route::get('/dashboardpetugas', [PagesController::class, 'dashboardpetugas'])->name('dashboardpetugas');
Route::get('/partisipanpetugas', [PagesController::class, 'partisipanpetugas']);
Route::get('/timpetugas', [PagesController::class, 'timpetugas']);
Route::get('/timdetail', [PagesController::class, 'timdetail']);
Route::get('/pesanpetugas', [PagesController::class, 'pesanpetugas']);
Route::get('/rangkingpetugas', [PagesController::class, 'rangkingpetugas']);
Route::get('/petugasrangking', [PagesController::class, 'petugasrangking']);
Route::get('/detailtimpetugas', [PagesController::class, 'detailtimpetugas']);

Route::get('/overviewpeserta', [PagesController::class, 'overviewpeserta'])->name('overviewpeserta');
Route::get('/detailpeserta', [PagesController::class, 'detailpeserta']);
Route::get('/profilpeserta', [PagesController::class, 'profilpeserta']);
Route::get('/notifikasipeserta', [PagesController::class, 'notifikasipeserta']);
Route::get('/reportpeserta', [PagesController::class, 'reportpeserta']);
Route::get('/detailtimreport', [PagesController::class, 'detailtimreport']);
Route::get('/daftarlomba', [PagesController::class, 'daftarlomba']);
Route::get('/datatim', [PagesController::class, 'datatim']);
Route::get('/anggotatim', [PagesController::class, 'anggotatim']);
Route::get('/pengumpulankarya', [PagesController::class, 'pengumpulankarya']);


Route::get('/proses', [PagesController::class, 'proses']);