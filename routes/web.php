<?php

use App\Http\Controllers\DataidentitasController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KesiswaanController;
use App\Http\Controllers\KompetensiController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MuhinewsController;
use App\Http\Controllers\TentangkamiController;
use App\Http\Controllers\UpjController;
use Illuminate\Support\Facades\Route;

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

//kompetensikeahlian
Route::get('/kompetensi',[KompetensiController::class,'kompetensi'])->name('kompetensi');



//kurikulum
Route::get('/kurikulum',[KurikulumController::class,'kurikulum'])->name('kurikulum');


//kesiswaan
Route::get('/kesiswaan',[KesiswaanController::class,'kesiswaan'])->name('kesiswaan');

Route::get('/upj',[UpjController::class,'upj'])->name('upj');




//login&register
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/loginproses',[LoginController::class,'loginproses'])->name('loginproses');

Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/registeruser',[LoginController::class,'registeruser'])->name('registeruser');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');



//ppdb
Route::get('/data-identitas',[DataidentitasController::class,'index'])->name('data-identitas');
Route::get('/welcome', function () {
    return view('welcome');
});


//detail blog

Route::get('/detailmuhi',[DetailController::class,'detailmuhi'])->name('detailmuhi');
Route::get('/detailmuhi2',[DetailController::class,'detailmuhi2'])->name('detailmuhi2');


