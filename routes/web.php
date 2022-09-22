<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UpjController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\MuhinewsController;
use App\Http\Controllers\KesiswaanController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\KompetensiController;
use App\Http\Controllers\TentangkamiController;
use App\Http\Controllers\DataidentitasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landingpage.landing');
});


//muinews
Route::get('/muhinews',[MuhinewsController::class,'index'])->name('muhinews');

//tentangkami
Route::get('/tentangkami',[TentangkamiController::class,'tentangkami'])->name('tentangkami');
Route::get('/profilsekolah',[TentangkamiController::class,'profilsekolah'])->name('profilsekolah');
Route::get('/identitas_sekolah',[TentangkamiController::class,'identitassekolah'])->name('identitassekolah');
Route::get('/fasilitassekolah',[TentangkamiController::class,'fasilitassekolah'])->name('fasilitassekolah');



//kompetensikeahlian
Route::get('/kompetensi',[KompetensiController::class,'kompetensi'])->name('kompetensi');
Route::get('/tkj',[KompetensiController::class,'tkj'])->name('tkj');
Route::get('/rpl',[KompetensiController::class,'rpl'])->name('rpl');
Route::get('/bd',[KompetensiController::class,'bd'])->name('bd');
Route::get('/ak',[KompetensiController::class,'ak'])->name('ak');
Route::get('/dkv',[KompetensiController::class,'dkv'])->name('dkv');
Route::get('/mp',[KompetensiController::class,'mp'])->name('mp');
Route::get('/ph',[KompetensiController::class,'ph'])->name('ph');
Route::get('/ulp',[KompetensiController::class,'ulp'])->name('ulp');




//kurikulum
Route::get('/kurikulum',[KurikulumController::class,'kurikulum'])->name('kurikulum');
Route::get('/kalenderakademik',[KurikulumController::class,'kalenderakademik'])->name('kalenderakademik');
Route::get('/jadwalkegiatan',[KurikulumController::class,'jadwalkegiatan'])->name('jadwalkegiatan');


//kesiswaan
Route::get('/kesiswaan',[KesiswaanController::class,'kesiswaan'])->name('kesiswaan');

Route::get('/upj',[UpjController::class,'upj'])->name('upj');



//ppdb
Route::get('/ppdb', [PpdbController::class, 'ppdb'])->name('ppdb');


//detail blog

Route::get('/detailmuhi',[DetailController::class,'detailmuhi'])->name('detailmuhi');
Route::get('/detailmuhi2',[DetailController::class,'detailmuhi2'])->name('detailmuhi2');











//template metronic
Route::get('/data-identitas',[DataidentitasController::class,'index'])->name('data-identitas');
Route::get('/welcome', function () {
    return view('welcome');
});



//profil
Route::get('/profil',[ProfilController::class, 'index'])->name('profil');


// Route::group(['middleware'=> ['auth','hakakses:admin']],function() {
    Route::get('/data-album',[AlbumController::class, 'loby'])->name('data-album');
    Route::get('/tambahalbum',[AlbumController::class, 'tambahalbum'])->name('tambahalbum');
    Route::post('/albumproses',[AlbumController::class, 'albumproses'])->name('albumproses');
    Route::get('/editalbum/{id}',[AlbumController::class, 'editalbum'])->name('editalbum');
    Route::post('/editproses/{id}',[AlbumController::class, 'editproses'])->name('editproses');
    Route::get('/deletealbum/{id}',[AlbumController::class, 'delete'])->name('delete');


    Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
    // });




//login&register
// Route::group(['middleware'=> ['auth','hakakses:admin,user']],function() {
    Route::get('/data-identitas',[DataidentitasController::class, 'index'])->name('data-identitas');
    Route::get('/register',[LoginController::class, 'register'])->name('register');
    Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');
    Route::get('/login',[LoginController::class, 'login'])->name('login');
    Route::post('/loginproses',[LoginController::class, 'loginproses'])->name('loginproses');



// });
