<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UpjController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\IdukaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KepsekController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AkademiController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MuhiblogController;
use App\Http\Controllers\MuhinewsController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FotoidukaController;
use App\Http\Controllers\KesiswaanController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\KompetensiController;
use App\Http\Controllers\DataidentitasController;
use App\Http\Controllers\DetailakademiController;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\FotokompetensiController;
use App\Http\Controllers\PersonaljurusanController;
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





//manajemen beranda

Route::get('/slideradmin',[SliderController::class, 'slideradmin'])->name('slideradmin');
Route::get('/editslider/{id}',[SliderController::class, 'editslider'])->name('editslider');
Route::post('/prosesslider/{id}',[SliderController::class, 'prosesslider'])->name('prosesslider');
Route::get('/deleteslider/{id}',[SliderController::class, 'delete'])->name('delete');


Route::get('/fotoslideradmin',[SliderController::class, 'fotoslideradmin'])->name('fotoslideradmin');
Route::get('/tambahfotoslider',[SliderController::class, 'tambahfotoslider'])->name('tambahfotoslider');
Route::post('/fotosliderproses',[SliderController::class, 'fotosliderproses'])->name('fotosliderproses');
Route::get('/editfotoslider/{id}',[SliderController::class, 'editfotoslider'])->name('editfotoslider');
Route::post('/prosesfotoslider/{id}',[SliderController::class, 'prosesfotoslider'])->name('prosesfotoslider');
Route::get('/deletefotoslider/{id}',[SliderController::class, 'delete2'])->name('delete');



Route::get('/sambutanadmin',[SambutanController::class, 'loby2'])->name('sambutanadmin');
Route::get('/tambahsambutan',[SambutanController::class, 'tambahsambutan'])->name('tambahsambutan');
Route::post('/submitdata2',[SambutanController::class, 'submitdata2'])->name('submitdata2');
Route::get('/editsambutan/{id}',[SambutanController::class, 'editsambutan'])->name('editsambutan');
Route::post('/submitedit2/{id}',[SambutanController::class, 'submitedit2'])->name('submitedit2');
Route::get('/deletesambutan/{id}',[SambutanController::class, 'delete'])->name('delete');




Route::get('/datajurusan',[JurusanController::class, 'loby3'])->name('datajurusan');
Route::get('/indexjurusan/{id}',[JurusanController::class, 'indexjurusan'])->name('indexjurusan');
Route::get('/tambahjurusan',[JurusanController::class, 'tambahjurusan'])->name('tambahjurusan');
Route::post('/submitdata3',[JurusanController::class, 'submitdata3'])->name('submitdata3');
Route::get('/editjurusan/{id}',[JurusanController::class, 'editjurusan'])->name('editjurusan');
Route::post('/submitedit3/{id}',[JurusanController::class, 'submitedit3'])->name('submitedit3');
Route::get('/deletejurusan/{id}',[JurusanController::class, 'delete'])->name('delete');



Route::get('/adminfotojurusan',[PersonaljurusanController::class, 'loby4'])->name('adminfotojurusan');
Route::get('/indexfotojurusan/{id}',[PersonaljurusanController::class, 'indexfotojurusan'])->name('indexfotojurusan');
Route::get('/tambahfotojurusan',[PersonaljurusanController::class, 'tambahfotojurusan'])->name('tambahfotojurusan');
Route::post('/submitdata4',[PersonaljurusanController::class, 'submitdata4'])->name('submitdata4');
Route::get('/deletefotojurusan/{id}',[PersonaljurusanController::class, 'delete'])->name('delete');


Route::get('/indexprestasi',[PrestasiController::class, 'indexprestasi'])->name('indexprestasi');
Route::get('/tambahprestasi',[PrestasiController::class, 'tambahprestasi'])->name('tambahprestasi');
Route::post('/submitdata5',[PrestasiController::class, 'submitdata5'])->name('submitdata5');
Route::get('/editprestasi/{id}',[PrestasiController::class, 'editprestasi'])->name('editprestasi');
Route::post('/submitedit5/{id}',[PrestasiController::class, 'submitedit5'])->name('submitedit5');
Route::get('/deleteprestasi/{id}',[PrestasiController::class, 'delete'])->name('delete');
















//muinews
Route::get('/muhinews',[MuhinewsController::class, 'index'])->name('muhinews');
Route::get('/muhinewsadmin',[MuhinewsController::class, 'indexadmin'])->name('muhinewsadmin');
Route::get('/tambahmuhinews',[MuhinewsController::class, 'tambahmuhinews'])->name('tambahmuhinews');
Route::post('/muhinewsproses',[MuhinewsController::class, 'muhinewsproses'])->name('muhinewsproses');
Route::get('/editmuhinews/{id}',[MuhinewsController::class, 'editmuhinews'])->name('editmuhinews');
Route::post('/editproses2/{id}',[MuhinewsController::class, 'editproses2'])->name('editproses2');
Route::get('/deletemuhinews/{id}',[MuhinewsController::class, 'delete'])->name('delete');

//muhiblog
Route::get('/muhiblog/{id}',[MuhiblogController::class, 'muhiblog'])->name('muhiblog');
Route::get('/muhiblogadmin',[MuhiblogController::class, 'muhiblogadmin'])->name('muhiblogadmin');
Route::get('/tambahmuhiblog',[MuhiblogController::class, 'tambahmuhiblog'])->name('tambahmuhiblog');
Route::post('/muhiblogproses',[MuhiblogController::class, 'muhiblogproses'])->name('muhiblogproses');
Route::get('/editmuhiblog/{id}',[MuhiblogController::class, 'editmuhiblog'])->name('editmuhiblog');
Route::post('/editmuhiblogproses/{id}',[MuhiblogController::class, 'editmuhiblogproses'])->name('editmuhiblogproses');
Route::get('/deletemuhiblog/{id}',[MuhiblogController::class, 'delete'])->name('delete');




//tentangkami

//crudprofilsekolah
Route::get('/profilsekolah',[ProfilSekolahController::class,'profilsekolah'])->name('profilsekolah');
Route::get('/profilsekolahadmin',[ProfilSekolahController::class,'profilsekolahadmin'])->name('profilsekolahadmin');
Route::get('/tambahprofilsekolah',[ProfilSekolahController::class,'tambahprofilsekolah'])->name('tambahprofilsekolah');
Route::post('/prosesprofilsekolah',[ProfilSekolahController::class,'prosesprofilsekolah'])->name('prosesprofilsekolah');
Route::get('/editprofilsekolah/{id}',[ProfilSekolahController::class, 'editprofilsekolah'])->name('editprofilsekolah');
Route::post('/editprosessekolah/{id}',[ProfilSekolahController::class,'editprosessekolah'])->name('editprosessekolah');
Route::get('/deleteprofilsekolah/{id}',[ProfilSekolahController::class, 'delete'])->name('delete');

//visimisi
Route::get('/visimisi',[ProfilSekolahController::class,'visimisi'])->name('visimisi');
Route::get('/visimisiadmin',[ProfilSekolahController::class,'visimisiadmin'])->name('visimisiadmin');
Route::get('/tambahvisimisi',[ProfilSekolahController::class,'tambahvisimisi'])->name('tambahvisimisi');
Route::post('/prosesvisimisi',[ProfilSekolahController::class,'prosesvisimisi'])->name('prosesvisimisi');
Route::get('/editvisimisi/{id}',[ProfilSekolahController::class, 'editvisimisi'])->name('editvisimisi');
Route::post('/editprosesvisimisi/{id}',[ProfilSekolahController::class,'editprosesvisimisi'])->name('editprosesvisimisi');
Route::get('/deletevisimisi/{id}',[ProfilSekolahController::class, 'deletevisimisi'])->name('delete');









//identitassekolah
Route::get('/identitas_sekolah',[IdentitasSekolahController::class,'identitassekolah'])->name('identitassekolah');
Route::get('/identitas_admin',[IdentitasSekolahController::class,'identitassekolahadmin'])->name('identitassekolahadmin');
Route::get('/tambahidentitas',[IdentitasSekolahController::class,'tambahidentitas'])->name('tambahidentitas');
Route::post('/identitasproses',[IdentitasSekolahController::class, 'identitasproses'])->name('identitasproses');
Route::get('/editidentitas/{id}',[IdentitasSekolahController::class,'editidentitas'])->name('editidentitas');
Route::post('/editprosesidentitas/{id}',[IdentitasSekolahController::class, 'editprosesidentitas'])->name('editprosesidentitas');
Route::get('/deleteidentitas/{id}',[IdentitasSekolahController::class, 'delete'])->name('delete');


//fasilitas sekolah dan crud
Route::get('/fasilitassekolah',[FasilitasController::class,'fasilitassekolah'])->name('fasilitassekolah');
Route::get('/fasilitasadmin',[FasilitasController::class,'fasilitasadmin'])->name('fasilitasadmin');
Route::get('/tambahfasilitas',[FasilitasController::class,'tambahfasilitas'])->name('tambahfasilitas');
Route::post('/prosesfasilitas',[FasilitasController::class,'prosesfasilitas'])->name('prosesfasilitas');
Route::get('/editfasilitas/{id}',[FasilitasController::class,'editfasilitas'])->name('editfasilitas');
Route::post('/editprosesfasilitas/{id}',[FasilitasController::class,'editprosesfasilitas'])->name('editprosesfasilitas');
Route::get('/deletefasilitas/{id}',[FasilitasController::class, 'delete'])->name('delete');














//kompetensikeahlian
Route::get('/kompetensi',[KompetensiController::class,'kompetensi'])->name('kompetensi');

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
Route::get('/ekstra',[KesiswaanController::class,'ekstra'])->name('ekstra');
Route::get('/osis',[KesiswaanController::class,'osis'])->name('osis');
Route::get('/alumni',[KesiswaanController::class,'alumni'])->name('alumni');






Route::get('/indexakademi',[AkademiController::class,'indexakademi'])->name('indexakademi');

Route::get('/dataakademi',[AkademiController::class, 'loby6'])->name('dataakademi');
Route::get('/tambahakademi',[AkademiController::class, 'tambahakademi'])->name('tambahakademi');
Route::post('/submitdata6',[AkademiController::class, 'submitdata6'])->name('submitdata6');
Route::get('/editakademi/{id}',[AkademiController::class, 'editakademi'])->name('editakademi');
Route::post('/submitedit6/{id}',[AkademiController::class, 'submitedit6'])->name('submitedit6');
Route::get('/deleteakademi/{id}',[AkademiController::class, 'delete'])->name('delete');




Route::get('/detailakademi/{id}',[DetailakademiController::class,'detailakademi'])->name('detailakademi');

Route::get('/admindetailakademi',[DetailakademiController::class, 'loby7'])->name('admindetailakademi');
Route::get('/tambahdetailakademi',[DetailakademiController::class, 'tambahdetailakademi'])->name('tambahdetailakademi');
Route::post('/submitdata7',[DetailakademiController::class, 'submitdata7'])->name('submitdata7');
Route::get('/editdetailakademi/{id}',[DetailakademiController::class, 'editdetailakademi'])->name('editdetailakademi');
Route::post('/submitedit7/{id}',[DetailakademiController::class, 'submitedit7'])->name('submitedit7');
Route::get('/deletedetailakademi/{id}',[DetailakademiController::class, 'delete'])->name('delete');



//upj
Route::get('/indexupj',[UpjController::class,'indexupj'])->name('indexupj');
Route::get('/upj',[UpjController::class,'upj'])->name('upj');



//ppdb
Route::get('/ppdb', [PpdbController::class, 'ppdb'])->name('ppdb');







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
