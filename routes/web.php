<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UpjController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\IdukaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AkademiController;
use App\Http\Controllers\FooteerController;
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
use App\Http\Controllers\UpjtekajeController;
use App\Http\Controllers\FooteerduaController;
use App\Http\Controllers\KompetensiController;
use App\Http\Controllers\DataidentitasController;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\FotokompetensiController;
use App\Http\Controllers\IdentitasSekolahController;
use App\Models\Album;
use App\Models\Mitra;
use App\Models\Muhinews;
use App\Models\Prestasi;
use App\Http\Controllers\ProfiladminController;
use App\Http\Controllers\PasswordController;


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
Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/authors', [LandingController::class, 'authors'])->name('authors');



//ppdb
Route::get('/pendaftaran', [PpdbController::class, 'pendaftaran'])->name('pendaftaran');



//login&register
Route::get('/register', [LoginController::class, 'register'])->name('register')->middleware('guest');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/adminoperator',[LoginController::class, 'loby26'])->name('adminoperator');
Route::get('/tambahoperator',[LoginController::class, 'tambahoperator'])->name('tambahoperator');
Route::post('/submitdata26',[LoginController::class, 'submitdata26'])->name('submitdata26');
Route::get('/editoperator/{id}',[LoginController::class, 'editoperator'])->name('editoperator');
Route::post('/submitedit26/{id}',[LoginController::class, 'submitedit26'])->name('submitedit26');
Route::get('/deleteoperator/{id}',[LoginController::class, 'deleteoperator'])->name('deleteoperator');





Route::get('/deskripsipendaftaran',[PpdbController::class, 'loby24'])->name('deskripsipendaftaran');
Route::get('/editdeskripsipendaftaran/{id}',[PpdbController::class, 'editdeskripsipendaftaran'])->name('editdeskripsipendaftaran');
Route::post('/submitedit24/{id}',[PpdbController::class, 'submitedit24'])->name('submitedit24');
Route::get('/deletedeskripsipendaftaran/{id}',[PpdbController::class, 'deletedeskripsipendaftaran'])->name('deletedeskripsipendaftaran');


Route::get('/admincarapendaftaran',[PpdbController::class, 'loby25'])->name('admincarapendaftaran');
Route::get('/tambahcarapendaftaran',[PpdbController::class, 'tambahcarapendaftaran'])->name('tambahcarapendaftaran');
Route::post('/submitdata25',[PpdbController::class, 'submitdata25'])->name('submitdata25');
Route::get('/editcarapendaftaran/{id}',[PpdbController::class, 'editcarapendaftaran'])->name('editcarapendaftaran');
Route::post('/submitedit25/{id}',[PpdbController::class, 'submitedit25'])->name('submitedit25');
Route::get('/deletecarapendaftaran/{id}',[PpdbController::class, 'deletecarapendaftaran'])->name('deletecarapendaftaran');










Route::get('/profilsekolah', [ProfilSekolahController::class, 'profilsekolah'])->name('profilsekolah');


//crud yang bisa diakses oleh admin, user tidak bisa
Route::group(['middleware' => ['auth', 'hakakses:admin']], function () {
    //dashboard
    Route::get('/welcome', function () {
        $berita = Muhinews::count();
        $galery = Album::count();
        $prestasi = Prestasi::count();
        $mitra = Mitra::count();
        return view('welcome', compact('berita', 'galery', 'prestasi', 'mitra'));
    })->middleware('auth');

    //tentangkami
    //profilsekolah
    Route::get('/profilsekolahadmin', [ProfilSekolahController::class, 'profilsekolahadmin'])->name('profilsekolahadmin');
    Route::get('/tambahprofilsekolah', [ProfilSekolahController::class, 'tambahprofilsekolah'])->name('tambahprofilsekolah');
    Route::post('/prosesprofilsekolah', [ProfilSekolahController::class, 'prosesprofilsekolah'])->name('prosesprofilsekolah');
    Route::get('/editprofilsekolah/{id}', [ProfilSekolahController::class, 'editprofilsekolah'])->name('editprofilsekolah');
    Route::post('/editprosessekolah/{id}', [ProfilSekolahController::class, 'editprosessekolah'])->name('editprosessekolah');
    Route::get('/deleteprofilsekolah/{id}', [ProfilSekolahController::class, 'delete'])->name('delete');

    //visimisi
    Route::get('/visimisi', [ProfilSekolahController::class, 'visimisi'])->name('visimisi');
    Route::get('/visimisiadmin', [ProfilSekolahController::class, 'visimisiadmin'])->name('visimisiadmin');
    Route::get('/tambahvisimisi', [ProfilSekolahController::class, 'tambahvisimisi'])->name('tambahvisimisi');
    Route::post('/prosesvisimisi', [ProfilSekolahController::class, 'prosesvisimisi'])->name('prosesvisimisi');
    Route::get('/editvisimisi/{id}', [ProfilSekolahController::class, 'editvisimisi'])->name('editvisimisi');
    Route::post('/editprosesvisimisi/{id}', [ProfilSekolahController::class, 'editprosesvisimisi'])->name('editprosesvisimisi');
    Route::get('/deletevisimisi/{id}', [ProfilSekolahController::class, 'deletevisimisi'])->name('delete');



    //identitassekolah
    Route::get('/identitas_sekolah', [IdentitasSekolahController::class, 'identitassekolah'])->name('identitassekolah');
    Route::get('/identitas_admin', [IdentitasSekolahController::class, 'identitassekolahadmin'])->name('identitassekolahadmin');
    Route::get('/tambahidentitas', [IdentitasSekolahController::class, 'tambahidentitas'])->name('tambahidentitas');
    Route::post('/identitasproses', [IdentitasSekolahController::class, 'identitasproses'])->name('identitasproses');
    Route::get('/editidentitas/{id}', [IdentitasSekolahController::class, 'editidentitas'])->name('editidentitas');
    Route::post('/editprosesidentitas/{id}', [IdentitasSekolahController::class, 'editprosesidentitas'])->name('editprosesidentitas');
    Route::get('/deleteidentitas/{id}', [IdentitasSekolahController::class, 'delete'])->name('delete');


    //fasilitas sekolah dan crud
    Route::get('/fasilitassekolah', [FasilitasController::class, 'fasilitassekolah'])->name('fasilitassekolah');
    Route::get('/fasilitasadmin', [FasilitasController::class, 'fasilitasadmin'])->name('fasilitasadmin');
    Route::get('/detailfoto/{id}', [FasilitasController::class, 'detailfoto'])->name('detailfoto');
    Route::get('/tambahfasilitas', [FasilitasController::class, 'tambahfasilitas'])->name('tambahfasilitas');
    Route::post('/prosesfasilitas', [FasilitasController::class, 'prosesfasilitas'])->name('prosesfasilitas');
    Route::get('/editfasilitas/{id}', [FasilitasController::class, 'editfasilitas'])->name('editfasilitas');
    Route::post('/editprosesfasilitas/{id}', [FasilitasController::class, 'editprosesfasilitas'])->name('editprosesfasilitas');
    Route::get('/deletefasilitas/{id}', [FasilitasController::class, 'deletefasilitas'])->name('delete');




    //kurikulum
    Route::get('/kalenderakademik', [KurikulumController::class, 'kalenderakademik'])->name('kalenderakademik');
    Route::get('/kalenderakademikadmin', [KurikulumController::class, 'kalenderakademikadmin'])->name('kalenderakademikadmin');
    Route::get('/tambahkalenderakademik', [KurikulumController::class, 'tambahkalenderakademik'])->name('tambahkalenderakademik');
    Route::post('/kalenderakademikproses9', [KurikulumController::class, 'kalenderakademikproses9'])->name('kalenderakademikproses9');
    Route::get('/editkalenderakademik/{id}', [KurikulumController::class, 'editkalenderakademik'])->name('editkalenderakademik');
    Route::post('/editproses9/{id}', [KurikulumController::class, 'editproses9'])->name('editproses9');
    Route::get('/delete/{id}', [KurikulumController::class, 'delete'])->name('delete');


    Route::get('/jadwalkegiatan', [KurikulumController::class, 'jadwalkegiatan'])->name('jadwalkegiatan');
    Route::get('/jadwalkegiatanadmin', [KurikulumController::class, 'jadwalkegiatanadmin'])->name('jadwalkegiatanadmin');
    Route::get('/tambahjadwalkegiatan', [KurikulumController::class, 'tambahjadwalkegiatan'])->name('tambahjadwalkegiatan');
    Route::post('/jadwalkegiatanproses', [KurikulumController::class, 'jadwalkegiatanproses'])->name('jadwalkegiatanproses');
    Route::get('/editjadwalkegiatan/{id}', [KurikulumController::class, 'editjadwalkegiatan'])->name('editjadwalkegiatan');
    Route::post('/editproses/{id}', [KurikulumController::class, 'editproses'])->name('editproses');
    Route::get('/deletejadwalkegiatan/{id}', [KurikulumController::class, 'deletejadwalkegiatan'])->name('deletejadwalkegiatan');



    //kelulusan
    Route::get('/kelsan ', [KurikulumController::class, 'kelsan'])->name('kelsan');
    Route::get('/adminkelulusan', [KurikulumController::class, 'adminkelulusan'])->name('adminkelulusan');
    Route::get('/tambahkelulusan', [KurikulumController::class, 'tambahkelulusan'])->name('tambahkelulusan');
    Route::post('/tambahproseskelulusan', [KurikulumController::class, 'tambahproseskelulusan'])->name('tambahproseskelulusan');
    Route::get('/editkelulusan/{id}', [KurikulumController::class, 'editkelulusan'])->name('editkelulusan');
    Route::post('/editproseskelulusan/{id}', [KurikulumController::class, 'editproseskelulusan'])->name('editproseskelulusan');
    Route::get('/deletekelulusan/{id}', [KurikulumController::class, 'deletekelulusan'])->name('deletekelulusan');
    Route::get('/exportpdf', [KurikulumController::class, 'exportpdf'])->name('exportpdf');
    Route::get('/exportexcel', [KurikulumController::class, 'exportexcel'])->name('exportexcel');
    Route::get('/exportword', [KurikulumController::class, 'exportword'])->name('exportword');




    Route::get('/kurikulumadmin', [KurikulumController::class, 'kurikulumadmin'])->name('kurikulumadmin');
    Route::get('/tambahkurikulum', [KurikulumController::class, 'tambahkurikulum'])->name('tambahkurikulum');
    Route::post('/kurikulumproses', [KurikulumController::class, 'kurikulumproses'])->name('kurikulumproses');
    Route::get('/editkurikulum/{id}', [KurikulumController::class, 'editkurikulum'])->name('editkurikulum');
    Route::post('/editproses4/{id}', [KurikulumController::class, 'editproses4'])->name('editproses4');
    Route::get('/deletekurikulum/{id}', [KurikulumController::class, 'delete'])->name('delete');




    //kesiswaan


    Route::get('/detaildeskripsi/{id}', [AkademiController::class, 'detaildeskripsi'])->name('detaildeskripsi');
    Route::get('/indexakademi', [AkademiController::class, 'indexakademi'])->name('indexakademi');
    Route::get('/detailakademi/{id}', [AkademiController::class, 'detailakademi'])->name('detailakademi');
    Route::get('/dataakademi', [AkademiController::class, 'loby6'])->name('dataakademi');
    Route::get('/tambahakademi', [AkademiController::class, 'tambahakademi'])->name('tambahakademi');
    Route::post('/submitdata6', [AkademiController::class, 'submitdata6'])->name('submitdata6');
    Route::get('/editakademi/{id}', [AkademiController::class, 'editakademi'])->name('editakademi');
    Route::post('/submitedit6/{id}', [AkademiController::class, 'submitedit6'])->name('submitedit6');
    Route::get('/deleteakademi/{id}', [AkademiController::class, 'delete'])->name('delete');



    Route::get('/ekstra', [KesiswaanController::class, 'ekstra'])->name('ekstra');
    Route::get('/ekstrakulikuleradmin', [KesiswaanController::class, 'ekstrakulikuleradmin'])->name('ekstrakulikuleradmin');
    Route::get('/tambahekstrakulikuler', [KesiswaanController::class, 'tambahekstrakulikuler'])->name('tambahekstrakulikuler');
    Route::post('/ekstrakulikulerproses1', [KesiswaanController::class, 'ekstrakulikulerproses1'])->name('ekstrakulikulerproses1');
    Route::get('/editekstrakulikuler/{id}', [KesiswaanController::class, 'editekstrakulikuler'])->name('editekstrakulikuler');
    Route::post('/editproses3/{id}', [KesiswaanController::class, 'editproses3'])->name('editproses3');
    Route::get('/deleteekstra/{id}', [KesiswaanController::class, 'deleteekstra'])->name('deleteekstra');



    //ekstrakulikulerblog
    Route::get('/ekstrakulikulerblog/{id}', [EkstrakulikulerBlogController::class, 'ekstrakulikulerblog'])->name('ekstrakulikulerblog');
    Route::get('/ekstrakulikulerblogadmin', [EkstrakulikulerBlogController::class, 'ekstrakulikulerblogadmin'])->name('ekstrakulikulerblogadmin');
    Route::get('/tambahekstrakulikulerblog', [EkstrakulikulerBlogController::class, 'tambahekstrakulikulerblog'])->name('tambahekstrakulikulerblog');
    Route::post('/ekstrakulikulerblogproses', [EkstrakulikulerBlogController::class, 'ekstrakulikulerblogproses'])->name('ekstrakulikulerblogproses');
    Route::get('/editekstrakulikulerblog/{id}', [EkstrakulikulerBlogController::class, 'editekstrakulikulerblog'])->name('editekstrakulikulerblog');
    Route::post('/editekstrakulikulerblogproses/{id}', [EkstrakulikulerBlogController::class, 'editekstrakulikulerblogproses'])->name('editekstrakulikulerblogproses');
    Route::get('/delete/{id}', [EkstrakulikulerBlogController::class, 'delete'])->name('delete');


    Route::get('/detailekstrakulikuler/{id}', [DetailEkstrakulikulerController::class, 'detailekstrakulikuler'])->name('detailekstrakulikuler');
    Route::get('/admindetailekstrakulikuler', [DetailEkstrakulikulerController::class, 'admindetailekstrakulikuler'])->name('admindetailekstrakulikuler');
    Route::get('/tambahdetailekstrakulikuler', [DetailEkstrakulikulerController::class, 'tambahdetailekstrakulikuler'])->name('tambahdetailekstrakulikuler');
    Route::post('/tambahdetail1', [DetailEkstrakulikulerController::class, 'tambahdetail1'])->name('tambahdetail1');
    Route::get('/editdetailekstrakulikuler/{id}', [DetailEkstrakulikulerController::class, 'editdetailekstrakulikuler'])->name('editdetailekstrakulikuler');
    Route::post('/editdetail1/{id}', [DetailEkstrakulikulerController::class, 'editdetail1'])->name('editdetail1');
    Route::get('/deletedetail/{id}', [DetailEkstrakulikulerController::class, 'deletedetail'])->name('deletedetail');



    Route::get('/osis', [KesiswaanController::class, 'osis'])->name('osis');
    Route::get('/osisadmin', [KesiswaanController::class, 'osisadmin'])->name('osisadmin');
    Route::get('/tambahosis', [KesiswaanController::class, 'tambahosis'])->name('tambahosis');
    Route::post('/osisproses3', [KesiswaanController::class, 'osisproses3'])->name('osisproses3');
    Route::get('/editosis/{id}', [KesiswaanController::class, 'editosis'])->name('editosis');
    Route::post('/editproses5/{id}', [KesiswaanController::class, 'editproses5'])->name('editproses5');
    Route::get('/deleteosis/{id}', [KesiswaanController::class, 'deleteosis'])->name('deleteosis');

    Route::get('/alumni', [KesiswaanController::class, 'alumni'])->name('alumni');
    Route::get('/alumniadmin', [KesiswaanController::class, 'alumniadmin'])->name('alumniadmin');
    Route::get('/tambahalumni', [KesiswaanController::class, 'tambahalumni'])->name('tambahalumni');
    Route::post('/tambahalumniproses', [KesiswaanController::class, 'tambahalumniproses'])->name('tambahalumniproses');
    Route::get('/editalumni/{id}', [KesiswaanController::class, 'editalumni'])->name('editalumni');
    Route::post('/editprosesalumni/{id}', [KesiswaanController::class, 'editprosesalumni'])->name('editprosesalumni');
    Route::get('/deletealumni/{id}', [KesiswaanController::class, 'deletealumni'])->name('deletealumni');




    //muhinews
    Route::get('/muhinews', [MuhinewsController::class, 'index'])->name('muhinews');
    Route::get('/muhinewsadmin', [MuhinewsController::class, 'indexadmin'])->name('muhinewsadmin');
    Route::get('/detailmuhinews/{id}', [MuhinewsController::class, 'detailmuhinews'])->name('detailmuhinews');
    Route::get('/tambahmuhinews', [MuhinewsController::class, 'tambahmuhinews'])->name('tambahmuhinews');
    Route::post('/muhinewsproses', [MuhinewsController::class, 'muhinewsproses'])->name('muhinewsproses');
    Route::get('/editmuhinews/{id}', [MuhinewsController::class, 'editmuhinews'])->name('editmuhinews');
    Route::post('/editproses2/{id}', [MuhinewsController::class, 'editproses2'])->name('editproses2');
    Route::get('/deletemuhinews/{id}', [MuhinewsController::class, 'delete'])->name('delete');

    //muhiblog
    Route::get('/muhiblog/{id}', [MuhiblogController::class, 'muhiblog'])->name('muhiblog');
    Route::get('/muhiblogadmin', [MuhiblogController::class, 'muhiblogadmin'])->name('muhiblogadmin');
    Route::get('/tambahmuhiblog', [MuhiblogController::class, 'tambahmuhiblog'])->name('tambahmuhiblog');
    Route::post('/muhiblogproses', [MuhiblogController::class, 'muhiblogproses'])->name('muhiblogproses');
    Route::get('/editmuhiblog/{id}', [MuhiblogController::class, 'editmuhiblog'])->name('editmuhiblog');
    Route::post('/editmuhiblogproses/{id}', [MuhiblogController::class, 'editmuhiblogproses'])->name('editmuhiblogproses');
    Route::get('/deletemuhiblog/{id}', [MuhiblogController::class, 'delete'])->name('delete');

    //kategoriberita

    Route::get('/kategoriberita', [MuhiblogController::class, 'kategoriberita'])->name('kategoriberita');
    Route::get('/tambahkategori', [MuhiblogController::class, 'tambahkategori'])->name('tambahkategori');
    Route::post('/kategoriproses', [MuhiblogController::class, 'kategoriproses'])->name('kategoriproses');
    Route::get('/editkategori/{id}', [MuhiblogController::class, 'editkategori'])->name('editkategori');
    Route::post('/editproseskategori/{id}', [MuhiblogController::class, 'editproseskategori'])->name('editproseskategori');
    Route::get('/deletekategori/{id}', [MuhiblogController::class, 'deletekategori'])->name('delete');


    //Iduka
    Route::get('/iduka', [IdukaController::class, 'index'])->name('iduka');
    Route::get('/idukaadmin', [IdukaController::class, 'indexadmin'])->name('idukaadmin');
    Route::get('/tambahiduka', [IdukaController::class, 'tambahiduka'])->name('tambahiduka');
    Route::post('/idukaproses', [IdukaController::class, 'idukaproses'])->name('idukaproses');
    Route::get('/editiduka/{id}', [IdukaController::class, 'editiduka'])->name('editiduka');
    Route::post('/editproses3/{id}', [IdukaController::class, 'editproses3'])->name('editproses3');
    Route::get('/deleteiduka/{id}', [IdukaController::class, 'delete'])->name('delete');


    Route::get('/mouadmin', [FotoidukaController::class, 'mouadmin'])->name('mouadmin');
    Route::get('/tambahfotomou', [FotoidukaController::class, 'tambahfotomou'])->name('tambahfotomou');
    Route::post('/fotomouproses', [FotoidukaController::class, 'fotomouproses'])->name('fotomouproses');
    Route::get('/editfotomou/{id}', [FotoidukaController::class, 'editfotomou'])->name('editfotomou');
    Route::post('/editproses4/{id}', [FotoidukaController::class, 'editproses4'])->name('editproses4');
    Route::get('/deletefotomou/{id}', [FotoidukaController::class, 'delete'])->name('delete');

    //managementberanda

    Route::get('/fotoslideradmin', [SliderController::class, 'fotoslideradmin'])->name('fotoslideradmin');
    Route::get('/tambahfotoslider', [SliderController::class, 'tambahfotoslider'])->name('tambahfotoslider');
    Route::post('/fotosliderproses', [SliderController::class, 'fotosliderproses'])->name('fotosliderproses');
    Route::get('/editfotoslider/{id}', [SliderController::class, 'editfotoslider'])->name('editfotoslider');
    Route::post('/prosesfotoslider/{id}', [SliderController::class, 'prosesfotoslider'])->name('prosesfotoslider');
    Route::get('/deletefotoslider/{id}', [SliderController::class, 'delete2'])->name('delete');

    Route::get('/sambutanadmin', [SambutanController::class, 'loby2'])->name('sambutanadmin');
    Route::get('/tambahsambutan', [SambutanController::class, 'tambahsambutan'])->name('tambahsambutan');
    Route::post('/submitdata2', [SambutanController::class, 'submitdata2'])->name('submitdata2');
    Route::get('/editsambutan/{id}', [SambutanController::class, 'editsambutan'])->name('editsambutan');
    Route::post('/submitedit2/{id}', [SambutanController::class, 'submitedit2'])->name('submitedit2');
    Route::get('/deletesambutan/{id}', [SambutanController::class, 'delete'])->name('delete');

    Route::get('/detailjurusan/{id}', [JurusanController::class, 'detailjurusan'])->name('detailjurusan');
    Route::get('/datajurusan', [JurusanController::class, 'loby3'])->name('datajurusan');
    Route::get('/indexjurusan/{id}', [JurusanController::class, 'indexjurusan'])->name('indexjurusan');
    Route::get('/tambahjurusan', [JurusanController::class, 'tambahjurusan'])->name('tambahjurusan');
    Route::post('/submitdata3', [JurusanController::class, 'submitdata3'])->name('submitdata3');
    Route::get('/editjurusan/{id}', [JurusanController::class, 'editjurusan'])->name('editjurusan');
    Route::post('/submitedit3/{id}', [JurusanController::class, 'submitedit3'])->name('submitedit3');
    Route::get('/deletejurusan/{id}', [JurusanController::class, 'delete'])->name('delete');



    Route::get('/indexprestasi', [PrestasiController::class, 'indexprestasi'])->name('indexprestasi');
    Route::get('/tambahprestasi', [PrestasiController::class, 'tambahprestasi'])->name('tambahprestasi');
    Route::post('/submitdata5', [PrestasiController::class, 'submitdata5'])->name('submitdata5');
    Route::get('/editprestasi/{id}', [PrestasiController::class, 'editprestasi'])->name('editprestasi');
    Route::post('/submitedit5/{id}', [PrestasiController::class, 'submitedit5'])->name('submitedit5');
    Route::get('/deleteprestasi/{id}', [PrestasiController::class, 'delete'])->name('delete');

    Route::get('/data-album', [AlbumController::class, 'loby'])->name('data-album');
    Route::get('/tambahalbum', [AlbumController::class, 'tambahalbum'])->name('tambahalbum');
    Route::post('/albumproses', [AlbumController::class, 'albumproses'])->name('albumproses');
    Route::get('/editalbum/{id}', [AlbumController::class, 'editalbum'])->name('editalbum');
    Route::post('/editproses/{id}', [AlbumController::class, 'editproses'])->name('editproses');
    Route::get('/deletealbum/{id}', [AlbumController::class, 'delete'])->name('delete');
    //kompetensikeahlian
    Route::get('/kompetensi', [KompetensiController::class, 'kompetensi'])->name('kompetensi');

    Route::get('/kompetensiadmin', [KompetensiController::class, 'kompetensiadmin'])->name('kompetensiadmin');
    Route::get('/tambahkompetensi', [KompetensiController::class, 'tambahkompetensi'])->name('tambahkompetensi');
    Route::post('/kompetensiproses', [KompetensiController::class, 'kompetensiproses'])->name('kompetensiproses');
    Route::get('/editkompetensi/{id}', [KompetensiController::class, 'editkompetensi'])->name('editkompetensi');
    Route::post('/editproseskompetensi/{id}', [KompetensiController::class, 'editproseskompetensi'])->name('editproseskompetensi');
    Route::get('/deletekompetensi/{id}', [KompetensiController::class, 'delete'])->name('delete');

    Route::get('/fotokompetensiadmin', [FotokompetensiController::class, 'fotokompetensiadmin'])->name('fotokompetensiadmin');
    Route::get('/tambahfotokompetensi', [FotokompetensiController::class, 'tambahfotokompetensi'])->name('tambahfotokompetensi');
    Route::post('/fotokompetensiproses', [FotokompetensiController::class, 'fotokompetensiproses'])->name('fotokompetensiproses');
    Route::get('/editfotokompetensi/{id}', [FotokompetensiController::class, 'editfotokompetensi'])->name('editfotokompetensi');
    Route::post('/editprosesfotokompetensi/{id}', [FotokompetensiController::class, 'editprosesfotokompetensi'])->name('editprosesfotokompetensi');
    Route::get('/deletefotokompetensi/{id}', [FotokompetensiController::class, 'delete'])->name('delete');



    //footeer
    Route::get('/footeeradmin', [FooteerController::class, 'footeeradmin'])->name('footeeradmin');
    Route::get('/tambahfooteer', [FooteerController::class, 'tambahfooteer'])->name('tambahfooteer');
    Route::post('/footeerproses7', [FooteerController::class, 'footeerproses7'])->name('footeerproses7');
    Route::get('/editfooteer/{id}', [FooteerController::class, 'editfooteer'])->name('editfooteer');
    Route::post('/editproses7/{id}', [FooteerController::class, 'editproses7'])->name('editproses7');
    Route::get('/deletefooteer/{id}', [FooteerController::class, 'deletefooteer'])->name('deletefooteer');


    //footeerduaaaa//

    Route::get('/adminfooteerdua', [FooteerduaController::class, 'adminfooteerdua'])->name('adminfooteerdua');
    Route::get('/tambahfooteerdua', [FooteerduaController::class, 'tambahfooteerdua'])->name('tambahfooteerdua');
    Route::post('/footeerprosesdua', [FooteerduaController::class, 'footeerprosesdua'])->name('footeerprosesdua');
    Route::get('/editfooteerdua/{id}', [FooteerduaController::class, 'editfooteerdua'])->name('editfooteerdua');
    Route::post('/editprosesdua/{id}', [FooteerduaController::class, 'editprosesdua'])->name('editprosesdua');
    Route::get('/delete/{id}', [FooteerduaController::class, 'delete'])->name('delete');




    Route::get('adminmitra', [MitraController::class, 'adminmitra'])->name('adminmitra');
    Route::get('/tambahmitra', [MitraController::class, 'tambahmitra'])->name('tambahmitra');
    Route::post('/submitdata14', [MitraController::class, 'submitdata14'])->name('submitdata14');
    Route::get('/editmitra/{id}', [MitraController::class, 'editmitra'])->name('editmitra');
    Route::post('/submitedit14/{id}', [MitraController::class, 'submitedit14'])->name('submitedit14');
    Route::get('/deletemitra/{id}', [MitraController::class, 'deletemitra'])->name('deletemitra');



    //upj
    Route::get('/indexupj', [UpjController::class, 'indexupj'])->name('indexupj');
    Route::get('/upj', [UpjtekajeController::class, 'upj'])->name('upj');
    Route::get('/adminupj', [UpjController::class, 'adminupj'])->name('adminupj');
    Route::get('/tambahupj', [UpjController::class, 'tambahupj'])->name('tambahupj');
    Route::post('/upjproses', [UpjController::class, 'upjproses'])->name('upjproses');
    Route::get('/editupj/{id}', [UpjController::class, 'editupj'])->name('editupj');
    Route::post('/editupjproses/{id}', [UpjController::class, 'editupjproses'])->name('editupjproses');
    Route::get('/deleteupj/{id}', [UpjController::class, 'deleteupj'])->name('delete');

    Route::get('/adminupj2', [UpjController::class, 'adminupj2'])->name('adminupj2');
    Route::get('/tambahupj2', [UpjController::class, 'tambahupj2'])->name('tambahupj2');
    Route::post('/upjproses2', [UpjController::class, 'upjproses2'])->name('upjproses2');
    Route::get('/editupj2/{id}', [UpjController::class, 'editupj2'])->name('editupj2');
    Route::post('/editupjproses2/{id}', [UpjController::class, 'editupjproses2'])->name('editupjproses2');
    Route::get('/deleteupj2/{id}', [UpjController::class, 'deleteupj2'])->name('delete');

    Route::get('/adminupjslider', [UpjtekajeController::class, 'loby23'])->name('adminupjslider');
    Route::get('/editupjslider/{id}', [UpjtekajeController::class, 'editupjslider'])->name('editupjslider');
    Route::post('/submitedit23/{id}', [UpjtekajeController::class, 'submitedit23'])->name('submitedit23');
    Route::get('/deleteupjslider/{id}', [UpjtekajeController::class, 'deleteupjslider'])->name('deleteupjslider');



    Route::get('/indexbsi', [UpjController::class, 'indexbsi'])->name('indexbsi');
    Route::get('/adminbsi', [UpjController::class, 'loby8'])->name('adminbsi');
    Route::get('/tambahbsi', [UpjController::class, 'tambahbsi'])->name('tambahbsi');
    Route::post('/submitdata8', [UpjController::class, 'submitdata8'])->name('submitdata8');
    Route::get('/editbsi/{id}', [UpjController::class, 'editbsi'])->name('editbsi');
    Route::post('/submitedit8/{id}', [UpjController::class, 'submitedit8'])->name('submitedit8');
    Route::get('/deletebsi/{id}', [UpjController::class, 'deletebsi'])->name('deletebsi');




    Route::get('/indexmuhiprint', [UpjController::class, 'indexmuhiprint'])->name('indexmuhiprint');
    Route::get('/adminmuhiprint', [UpjController::class, 'loby9'])->name('adminmuhiprint');
    Route::get('/tambahmuhiprint', [UpjController::class, 'tambahmuhiprint'])->name('tambahmuhiprint');
    Route::post('/submitdata9', [UpjController::class, 'submitdata9'])->name('submitdata9');
    Route::get('/editmuhiprint/{id}', [UpjController::class, 'editmuhiprint'])->name('editmuhiprint');
    Route::post('/submitedit9/{id}', [UpjController::class, 'submitedit9'])->name('submitedit9');
    Route::get('/deletemuhiprint/{id}', [UpjController::class, 'deletemuhiprint'])->name('deletemuhiprint');




    Route::get('/indexpegadaian', [UpjController::class, 'indexpegadaian'])->name('indexpegadaian');
    Route::get('/adminpegadaian', [UpjController::class, 'loby10'])->name('adminpegadaian');
    Route::get('/tambahpegadaian', [UpjController::class, 'tambahpegadaian'])->name('tambahpegadaian');
    Route::post('/submitdata10', [UpjController::class, 'submitdata10'])->name('submitdata10');
    Route::get('/editpegadaian/{id}', [UpjController::class, 'editpegadaian'])->name('editpegadaian');
    Route::post('/submitedit10/{id}', [UpjController::class, 'submitedit10'])->name('submitedit10');
    Route::get('/deletepegadaian/{id}', [UpjController::class, 'deletepegadaian'])->name('deletepegadaian');



    Route::get('/indexsuryamart', [UpjController::class, 'indexsuryamart'])->name('indexsuryamart');
    Route::get('/adminsuryamart', [UpjController::class, 'loby11'])->name('adminsuryamart');
    Route::get('/tambahsuryamart', [UpjController::class, 'tambahsuryamart'])->name('tambahsuryamart');
    Route::post('/submitdata11', [UpjController::class, 'submitdata11'])->name('submitdata11');
    Route::get('/editsuryamart/{id}', [UpjController::class, 'editsuryamart'])->name('editsuryamart');
    Route::post('/submitedit11/{id}', [UpjController::class, 'submitedit11'])->name('submitedit11');
    Route::get('/deletesuryamart/{id}', [UpjController::class, 'deletesuryamart'])->name('deletesuryamart');




    Route::get('/indexedotel', [UpjController::class, 'indexedotel'])->name('indexedotel');
    Route::get('/adminedotel', [UpjController::class, 'loby12'])->name('adminedotel');
    Route::get('/tambahedotel', [UpjController::class, 'tambahedotel'])->name('tambahedotel');
    Route::post('/submitdata12', [UpjController::class, 'submitdata12'])->name('submitdata12');
    Route::get('/editedotel/{id}', [UpjController::class, 'editedotel'])->name('editedotel');
    Route::post('/submitedit12/{id}', [UpjController::class, 'submitedit12'])->name('submitedit12');
    Route::get('/deleteedotel/{id}', [UpjController::class, 'deleteedotel'])->name('deleteedotel');





    Route::get('/tentangkami', [UpjtekajeController::class, 'loby13'])->name('tentangkami');
    Route::get('/tambahtentangkami', [UpjtekajeController::class, 'tambahtentangkami'])->name('tambahtentangkami');
    Route::post('/submitdata13', [UpjtekajeController::class, 'submitdata13'])->name('submitdata13');
    Route::get('/edittentangkami/{id}', [UpjtekajeController::class, 'edittentangkami'])->name('edittentangkami');
    Route::post('/submitedit13/{id}', [UpjtekajeController::class, 'submitedit13'])->name('submitedit13');
    Route::get('/deletetentangkami/{id}', [UpjtekajeController::class, 'deletetentangkami'])->name('deletetentangkami');


    Route::get('/adminteam', [UpjtekajeController::class, 'loby15'])->name('adminteam');
    Route::get('/tambahteam', [UpjtekajeController::class, 'tambahteam'])->name('tambahteam');
    Route::post('/submitdata15', [UpjtekajeController::class, 'submitdata15'])->name('submitdata15');
    Route::get('/editteam/{id}', [UpjtekajeController::class, 'editteam'])->name('editteam');
    Route::post('/submitedit15/{id}', [UpjtekajeController::class, 'submitedit15'])->name('submitedit15');
    Route::get('/deleteteam/{id}', [UpjtekajeController::class, 'deleteteam'])->name('deleteteam');


    Route::get('/adminkeunggulan', [UpjtekajeController::class, 'loby16'])->name('adminkeunggulan');
    Route::get('/tambahkeunggulan', [UpjtekajeController::class, 'tambahkeunggulan'])->name('tambahkeunggulan');
    Route::post('/submitdata16', [UpjtekajeController::class, 'submitdata16'])->name('submitdata16');
    Route::get('/editkeunggulan/{id}', [UpjtekajeController::class, 'editkeunggulan'])->name('editkeunggulan');
    Route::post('/submitedit16/{id}', [UpjtekajeController::class, 'submitedit16'])->name('submitedit16');
    Route::get('/deletekeunggulan/{id}', [UpjtekajeController::class, 'deletekeunggulan'])->name('deletekeunggulan');



    Route::get('/adminjasa', [UpjtekajeController::class, 'loby17'])->name('adminjasa');
    Route::get('/tambahjasa', [UpjtekajeController::class, 'tambahjasa'])->name('tambahjasa');
    Route::post('/submitdata17', [UpjtekajeController::class, 'submitdata17'])->name('submitdata17');
    Route::get('/editjasa/{id}', [UpjtekajeController::class, 'editjasa'])->name('editjasa');
    Route::post('/submitedit17/{id}', [UpjtekajeController::class, 'submitedit17'])->name('submitedit17');
    Route::get('/deletejasa/{id}', [UpjtekajeController::class, 'deletejasa'])->name('deletejasa');



    Route::get('/admingalery', [UpjtekajeController::class, 'loby18'])->name('admingalery');
    Route::get('/tambahgalery', [UpjtekajeController::class, 'tambahgalery'])->name('tambahgalery');
    Route::post('/submitdata18', [UpjtekajeController::class, 'submitdata18'])->name('submitdata18');
    Route::get('/editgalery/{id}', [UpjtekajeController::class, 'editgalery'])->name('editgalery');
    Route::post('/submitedit18/{id}', [UpjtekajeController::class, 'submitedit18'])->name('submitedit18');
    Route::get('/deletegalery/{id}', [UpjtekajeController::class, 'deletegalery'])->name('deletegalery');



    Route::get('/adminvisimisi', [UpjtekajeController::class, 'loby19'])->name('adminvisimisi');
    Route::get('/tambahvisimisi', [UpjtekajeController::class, 'tambahvisimisi'])->name('tambahvisimisi');
    Route::post('/submitdata19', [UpjtekajeController::class, 'submitdata19'])->name('submitdata19');
    Route::get('/editupjvisimisi/{id}', [UpjtekajeController::class, 'editupjvisimisi'])->name('editupjvisimisi');
    Route::post('/submitedit19/{id}', [UpjtekajeController::class, 'submitedit19'])->name('submitedit19');
    Route::get('/deleteupjvisimisi/{id}', [UpjtekajeController::class, 'deleteupjvisimisi'])->name('deleteupjvisimisi');



    Route::get('/admintestimoni', [UpjtekajeController::class, 'loby20'])->name('admintestimoni');
    Route::get('/tambahtestimoni', [UpjtekajeController::class, 'tambahtestimoni'])->name('tambahtestimoni');
    Route::post('/submitdata20', [UpjtekajeController::class, 'submitdata20'])->name('submitdata20');
    Route::get('/edittestimoni/{id}', [UpjtekajeController::class, 'edittestimoni'])->name('edittestimoni');
    Route::post('/submitedit20/{id}', [UpjtekajeController::class, 'submitedit20'])->name('submitedit20');
    Route::get('/deletetestimoni/{id}', [UpjtekajeController::class, 'deletetestimoni'])->name('deletetestimoni');


    Route::get('/adminupjfooterlink', [UpjtekajeController::class, 'loby22'])->name('adminupjfooterlink');
    Route::get('/tambahupjfooterlink', [UpjtekajeController::class, 'tambahupjfooterlink'])->name('tambahupjfooterlink');
    Route::post('/submitdata22', [UpjtekajeController::class, 'submitdata22'])->name('submitdata22');
    Route::get('/editupjfooterlink/{id}', [UpjtekajeController::class, 'editupjfooterlink'])->name('editupjfooterlink');
    Route::post('/submitedit22/{id}', [UpjtekajeController::class, 'submitedit22'])->name('submitedit22');
    Route::get('/deleteupjfooterlink/{id}', [UpjtekajeController::class, 'deleteupjfooterlink'])->name('deleteupjfooterlink');



    Route::get('/adminupjfooter', [UpjtekajeController::class, 'loby21'])->name('adminupjfooter');
    Route::post('/submitdata21', [UpjtekajeController::class, 'submitdata21'])->name('submitdata21');
    Route::get('/editupjfooter/{id}', [UpjtekajeController::class, 'editupjfooter'])->name('editupjfooter');
    Route::post('/submitedit21/{id}', [UpjtekajeController::class, 'submitedit21'])->name('submitedit21');
    Route::get('/deleteupjfooter/{id}', [UpjtekajeController::class, 'deleteupjfooter'])->name('deleteupjfooter');
});


//Profiladmin



//index yang bisa diakses user dan admin
Route::group(['middleware' => ['auth', 'hakakses:admin,user']], function () {
    
    Route::get('/welcome', function () {
        $berita = Muhinews::count();
        $galery = Album::count();
        $prestasi = Prestasi::count();
        $mitra = Mitra::count();
        return view ('welcome', compact('berita', 'galery', 'prestasi', 'mitra'));
    })->middleware('auth');
    
    Route::get('/adminformulir',[PpdbController::class, 'loby27'])->name('adminformulir');
Route::get('/tambahformulir',[PpdbController::class, 'tambahformulir'])->name('tambahformulir');
Route::post('/submitdata27',[PpdbController::class, 'submitdata27'])->name('submitdata27');
Route::get('/deleteformulir/{id}',[PpdbController::class, 'deleteformulir'])->name('deleteformulir');


    Route::get('/profiladmin', [ProfiladminController::class, 'profiladmin'])->name('profiladmin');
    Route::get('/editprofiladmin', [ProfiladminController::class, 'editprofiladmin'])->name('editprofiladmin');
    Route::post('/updateprofiladmin', [ProfiladminController::class, 'updateprofiladmin'])->name('updateprofiladmin');
})

;
Route::group(['middleware' => ['auth', 'hakakses:admin,user,operator1,operator2']], function () {
    
    Route::get('/welcome', function () {
        $berita = Muhinews::count();
        $galery = Album::count();
        $prestasi = Prestasi::count();
        $mitra = Mitra::count();
        return view ('welcome', compact('berita', 'galery', 'prestasi', 'mitra'));
    })->middleware('auth');
    
    Route::get('/adminupjfooter', [UpjtekajeController::class, 'loby21'])->name('adminupjfooter');
    Route::post('/submitdata21', [UpjtekajeController::class, 'submitdata21'])->name('submitdata21');
    Route::get('/editupjfooter/{id}', [UpjtekajeController::class, 'editupjfooter'])->name('editupjfooter');
    Route::post('/submitedit21/{id}', [UpjtekajeController::class, 'submitedit21'])->name('submitedit21');
    Route::get('/deleteupjfooter/{id}', [UpjtekajeController::class, 'deleteupjfooter'])->name('deleteupjfooter');
});




