<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UpjController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\IdukaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MuhinewsController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FotoidukaController;
use App\Http\Controllers\KesiswaanController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\KompetensiController;
use App\Http\Controllers\DataidentitasController;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\FotokompetensiController;
use App\Http\Controllers\IdentitasSekolahController;

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

// Route::get('/', function () {
//     return view('landingpage.landing');
// });
Route::get('/',[LandingController::class,'index'])->name('landing');


//muinews
Route::get('/muhinews',[MuhinewsController::class, 'index'])->name('muhinews');
Route::get('/muhinewsadmin',[MuhinewsController::class, 'indexadmin'])->name('muhinewsadmin');
Route::get('/tambahmuhinews',[MuhinewsController::class, 'tambahmuhinews'])->name('tambahmuhinews');
Route::post('/muhinewsproses',[MuhinewsController::class, 'muhinewsproses'])->name('muhinewsproses');
Route::get('/editmuhinews/{id}',[MuhinewsController::class, 'editmuhinews'])->name('editmuhinews');
Route::post('/editproses2/{id}',[MuhinewsController::class, 'editproses2'])->name('editproses2');
Route::get('/deletemuhinews/{id}',[MuhinewsController::class, 'delete'])->name('delete');

//tentangkami
Route::get('/profilsekolah',[ProfilSekolahController::class,'profilsekolah'])->name('profilsekolah');
Route::get('/visimisi',[ProfilSekolahController::class,'visimisi'])->name('visimisi');
Route::get('/identitas_sekolah',[IdentitasSekolahController::class,'identitassekolah'])->name('identitassekolah');
Route::get('/fasilitassekolah',[FasilitasController::class,'fasilitassekolah'])->name('fasilitassekolah');

//crudprofilsekolah
Route::get('/profilsekolahadmin',[ProfilSekolahController::class,'profilsekolahadmin'])->name('profilsekolahadmin');
Route::get('/tambahprofilsekolah',[ProfilSekolahController::class,'tambahprofilsekolah'])->name('tambahprofilsekolah');
Route::post('/prosesprofilsekolah',[ProfilSekolahController::class,'prosesprofilsekolah'])->name('prosesprofilsekolah');
Route::get('/editprofilsekolah',[ProfilSekolahController::class,'editprofilsekolah'])->name('editprofilsekolah');
Route::post('/editprosesidentitas/{id}',[ProfilSekolahController::class,'editprosesidentitas'])->name('editprosesidentitas');



//crudtentangkami
Route::get('/identitas_admin',[IdentitasSekolahController::class,'identitassekolahadmin'])->name('identitassekolahadmin');
Route::get('/tambahidentitas',[IdentitasSekolahController::class,'tambahidentitas'])->name('tambahidentitas');
Route::post('/identitasproses',[IdentitasSekolahController::class, 'identitasproses'])->name('identitasproses');
Route::get('/editidentitas',[IdentitasSekolahController::class,'editidentitas'])->name('editidentitas');
Route::post('/editprosesidentitas/{id}',[IdentitasSekolahController::class, 'editprosesidentitas'])->name('editprosesidentitas');







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

Route::get('/kompetensiadmin',[KompetensiController::class, 'kompetensiadmin'])->name('kompetensiadmin');
Route::get('/tambahkompetensi',[KompetensiController::class, 'tambahkompetensi'])->name('tambahkompetensi');
Route::post('/kompetensiproses',[KompetensiController::class, 'kompetensiproses'])->name('kompetensiproses');
Route::get('/editkompetensi/{id}',[KompetensiController::class, 'editkompetensi'])->name('editkompetensi');
Route::post('/editproseskompetensi/{id}',[KompetensiController::class, 'editproseskompetensi'])->name('editproseskompetensi');
Route::get('/deletekompetensi/{id}',[KompetensiController::class, 'delete'])->name('delete');

Route::get('/fotokompetensiadmin',[FotokompetensiController::class, 'fotokompetensiadmin'])->name('fotokompetensiadmin');
Route::get('/tambahfotokompetensi',[FotokompetensiController::class, 'tambahfotokompetensi'])->name('tambahfotokompetensi');
Route::post('/fotokompetensiproses',[FotokompetensiController::class, 'fotokompetensiproses'])->name('fotokompetensiproses');
Route::get('/editfotokompetensi/{id}',[FotokompetensiController::class, 'editfotokompetensi'])->name('editfotokompetensi');
Route::post('/editprosesfotokompetensi/{id}',[FotokompetensiController::class, 'editprosesfotokompetensi'])->name('editprosesfotokompetensi');
Route::get('/deletefotokompetensi/{id}',[FotokompetensiController::class, 'delete'])->name('delete');








//kurikulum
Route::get('/kurikulum',[KurikulumController::class,'kurikulum'])->name('kurikulum');
Route::get('/kalenderakademik',[KurikulumController::class,'kalenderakademik'])->name('kalenderakademik');
Route::get('/jadwalkegiatan',[KurikulumController::class,'jadwalkegiatan'])->name('jadwalkegiatan');


Route::get('/kurikulumadmin',[KurikulumController::class, 'kurikulumadmin'])->name('kurikulumadmin');
Route::get('/tambahkurikulum',[KurikulumController::class, 'tambahkurikulum'])->name('tambahkurikulum');
Route::post('/kurikulumproses',[KurikulumController::class, 'kurikulumproses'])->name('kurikulumproses');
Route::get('/editkurikulum/{id}',[KurikulumController::class, 'editkurikulum'])->name('editkurikulum');
Route::post('/editproses4/{id}',[KurikulumController::class, 'editproses4'])->name('editproses4');
Route::get('/deletekurikulum/{id}',[KurikulumController::class, 'delete'])->name('delete');



//kesiswaan
Route::get('/kesiswaan',[KesiswaanController::class,'kesiswaan'])->name('kesiswaan');
Route::get('/ekstra',[KesiswaanController::class,'ekstra'])->name('ekstra');

Route::get('/upj',[UpjController::class,'upj'])->name('upj');



//ppdb
Route::get('/ppdb', [PpdbController::class, 'ppdb'])->name('ppdb');


//detail blog

Route::get('/detailmuhi',[DetailController::class,'detailmuhi'])->name('detailmuhi');
Route::get('/detailmuhi2',[DetailController::class,'detailmuhi2'])->name('detailmuhi2');





//Iduka
Route::get('/iduka',[IdukaController::class, 'index'])->name('iduka');
Route::get('/idukaadmin',[IdukaController::class, 'indexadmin'])->name('idukaadmin');
Route::get('/tambahiduka',[IdukaController::class, 'tambahiduka'])->name('tambahiduka');
Route::post('/idukaproses',[IdukaController::class, 'idukaproses'])->name('idukaproses');
Route::get('/editiduka/{id}',[IdukaController::class, 'editiduka'])->name('editiduka');
Route::post('/editproses3/{id}',[IdukaController::class, 'editproses3'])->name('editproses3');
Route::get('/deleteiduka/{id}',[IdukaController::class, 'delete'])->name('delete');


Route::get('/mouadmin',[FotoidukaController::class, 'mouadmin'])->name('mouadmin');
Route::get('/tambahfotomou',[FotoidukaController::class, 'tambahfotomou'])->name('tambahfotomou');
Route::post('/fotomouproses',[FotoidukaController::class, 'fotomouproses'])->name('fotomouproses');
Route::get('/editfotomou/{id}',[FotoidukaController::class, 'editfotomou'])->name('editfotomou');
Route::post('/editproses4/{id}',[FotoidukaController::class, 'editproses4'])->name('editproses4');
Route::get('/deletefotomou/{id}',[FotoidukaController::class, 'delete'])->name('delete');








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
