<?php

use App\Http\Controllers\Admin\Berita\KegiatanSekolahController;
use App\Http\Controllers\Admin\Berita\PendidikanController;
use App\Http\Controllers\Admin\Dapodik\BiodataSekolahController;
use App\Http\Controllers\Admin\Dapodik\DaftarGuruController;
use App\Http\Controllers\Admin\Dapodik\SaranaPrasaranaController;
use App\Http\Controllers\Admin\Galeri\FotoController;
use App\Http\Controllers\Admin\Galeri\VideoController;
use App\Http\Controllers\Admin\Login\LoginController;
use App\Http\Controllers\Admin\LogoMotto\LogoMottoController;
use App\Http\Controllers\Admin\Profile\KepalaSekolahController;
use App\Http\Controllers\Admin\Profile\SejarahController;
use App\Http\Controllers\Admin\Profile\StrukturOrganisasiController;
use App\Http\Controllers\Admin\Profile\VisiMisiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\TataTertibController;
use App\Http\Controllers\UsersController;
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
Route::prefix('/')->name('home.')->group(function() {
    Route::get('', [HomeController::class, 'index'])->name('index');
    Route::get('/profile/sejarah', [HomeController::class, 'sejarah'])->name('profile.sejarah');
    Route::get('/profile/kepala-sekolah', [HomeController::class, 'kepalaSekolah'])->name('profile.kepalaSekolah');
    Route::get('/profile/struktur-organisasi', [HomeController::class, 'strukturOrganisasi'])->name('profile.strukturOrganisasi');
    Route::get('/profile/visi-misi', [HomeController::class, 'visiMisi'])->name('profile.visiMisi');
    Route::get('/profile/logo-motto', [HomeController::class, 'logoMotto'])->name('profile.logoMotto'); 

    Route::get('/dapodik/biodata-sekolah', [HomeController::class, 'biodataSekolah'])->name('dapodik.biodataSekolah'); 
    Route::get('/dapodik/guru-&-tendik', [HomeController::class, 'guruTendik'])->name('dapodik.guruTendik'); 
    Route::get('/dapodik/sarana-prasarana', [HomeController::class, 'saranaPrasarana'])->name('dapodik.saranaPrasarana'); 
    
    Route::get('/tata-tertib', [HomeController::class, 'tataTertib'])->name('tataTertib'); 
    Route::get('/ekstrakurikuler', [HomeController::class, 'ekstrakurikuler'])->name('ekstrakurikuler'); 

    Route::get('/berita/pendidikan', [HomeController::class, 'beritaPendidikan'])->name('berita.pendidikan'); 
    Route::get('/berita/kegiatan-sekolah', [HomeController::class, 'kegiatanSekolah'])->name('berita.kegiatanSekolah'); 
    Route::get('/berita/detail/{id}', [HomeController::class, 'detaiBerita'])->name('berita.detaiBerita'); 

    Route::get('/galeri/foto', [HomeController::class, 'galeriFoto'])->name('galeri.galeriFoto'); 
    Route::get('/galeri/foto/detail/{id}', [HomeController::class, 'detailFoto'])->name('galeri.detailFoto'); 

    Route::get('/galeri/video', [HomeController::class, 'galeriVideo'])->name('galeri.galeriVideo'); 
    Route::get('/galeri/video/detail/{id}', [HomeController::class, 'detailVideo'])->name('galeri.detailVideo'); 

    Route::get('/prestasi', [HomeController::class, 'prestasi'])->name('prestasi'); 
    Route::get('/prestasi/detail/{id}', [HomeController::class, 'detailPrestasi'])->name('detailPrestasi'); 
    
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('verifikasi-email', [LoginController::class, 'verifikasiEmail'])->name('verifikasiEmail');
Route::post('verifikasi-email', [LoginController::class, 'actionVerifikasiEmail'])->name('actionVerifikasiEmail');
Route::get('reset-password/{name}', [LoginController::class, 'resetPassword'])->name('resetPassword');
Route::post('reset-password', [LoginController::class, 'actionResetPassword'])->name('actionResetPassword');

Route::get('/admin', [DashboardController::class, 'index'])->name('admin.index')->middleware('auth');

Route::prefix('admin')->name('admin.users.')->group( function() {
    Route::get('/users', [UsersController::class, 'index'])->name('index');
    Route::post('/users', [UsersController::class, 'store'])->name('store');
    Route::put('/users/{id}', [UsersController::class, 'update'])->name('update');
    Route::put('/users/password/{id}', [UsersController::class, 'updatePassword'])->name('updatePassword');
    Route::put('/users/image/{id}', [UsersController::class, 'updateImage'])->name('updateImage');
    Route::get('/users/delete/{id}', [UsersController::class, 'delete'])->name('delete');
});

Route::prefix('admin/profile')->name('admin.')->middleware('auth')->group( function() {
    Route::get('/sejarah-sekolah', [SejarahController::class, 'index'])->name('sejarah.index');
    Route::post('/sejarah-sekolah', [SejarahController::class, 'create'])->name('sejarah.create');
    Route::put('/sejarah-sekolah/{id}', [SejarahController::class, 'update'])->name('sejarah.update');
    Route::delete('/sejarah-sekolah/delete', [SejarahController::class, 'delete'])->name('sejarah.delete');

    Route::get('/kepala-sekolah', [KepalaSekolahController::class, 'index'])->name('kepsek.index');
    Route::post('/kepala-sekolah', [KepalaSekolahController::class, 'store'])->name('kepsek.store');
    Route::put('/kepala-sekolah/{id}', [KepalaSekolahController::class, 'update'])->name('kepsek.update');
    Route::delete('/kepala-sekolah/{id}', [KepalaSekolahController::class, 'delete'])->name('kepsek.delete');

    Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('strukturOrganisasi.index');
    Route::post('/struktur-organisasi', [StrukturOrganisasiController::class, 'store'])->name('strukturOrganisasi.store');
    Route::put('/struktur-organisasi/{id}', [StrukturOrganisasiController::class, 'update'])->name('strukturOrganisasi.update');
    Route::delete('/struktur-organisasi/{id}', [StrukturOrganisasiController::class, 'delete'])->name('strukturOrganisasi.delete');

    Route::get('/visi-&-misi', [VisiMisiController::class, 'index'])->name('visiMisi.index');
    Route::post('/visi-&-misi', [VisiMisiController::class, 'store'])->name('visiMisi.store');
    Route::put('/visi-&-misi/{id}', [VisiMisiController::class, 'update'])->name('visiMisi.update');
    Route::delete('/visi-&-misi/delete', [VisiMisiController::class, 'delete'])->name('visiMisi.delete');

    Route::get('/logo-&-motto', [LogoMottoController::class, 'index'])->name('logoMoto.index');
    Route::post('/logo-&-motto', [LogoMottoController::class, 'store'])->name('logoMoto.store');
    Route::put('/logo-&-motto/{id}', [LogoMottoController::class, 'update'])->name('logoMoto.update');
    Route::delete('/logo-&-motto/{id}', [LogoMottoController::class, 'delete'])->name('logoMoto.delete');
});

Route::prefix('admin/dapodik')->name('admin.')->middleware('auth')->group(function() {
    Route::get('/biodata-sekolah', [BiodataSekolahController::class, 'index'])->name('biodataSekolah.index');
    Route::post('/biodata-sekolah', [BiodataSekolahController::class, 'store'])->name('biodataSekolah.store');
    Route::put('/biodata-sekolah/{id}', [BiodataSekolahController::class, 'update'])->name('biodataSekolah.update');
    Route::delete('/biodata-sekolah/delete', [BiodataSekolahController::class, 'delete'])->name('biodataSekolah.delete');

    Route::get('/daftar-guru', [DaftarGuruController::class, 'index'])->name('daftarGuru.index');
    Route::post('/daftar-guru', [DaftarGuruController::class, 'store'])->name('daftarGuru.store');
    Route::put('/daftar-guru/{id}', [DaftarGuruController::class, 'update'])->name('daftarGuru.update');
    Route::put('/daftar-guru/image/{id}', [DaftarGuruController::class, 'updateImage'])->name('daftarGuru.updateImage');
    Route::get('/daftar-guru/{id}', [DaftarGuruController::class, 'destroy'])->name('daftarGuru.destroy');

    Route::get('/sarana-prasarana', [SaranaPrasaranaController::class, 'index'])->name('saranaPrasarana.index');
    Route::post('/sarana-prasarana', [SaranaPrasaranaController::class, 'store'])->name('saranaPrasarana.store');
    Route::put('/sarana-prasarana/{id}', [SaranaPrasaranaController::class, 'update'])->name('saranaPrasarana.update');
    Route::delete('/sarana-prasarana/delete', [SaranaPrasaranaController::class, 'delete'])->name('saranaPrasarana.delete');
    
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('ekstrakurikuler.index');
    Route::post('/ekstrakurikuler', [EkstrakurikulerController::class, 'store'])->name('ekstrakurikuler.store');
    Route::put('/ekstrakurikuler/{id}', [EkstrakurikulerController::class, 'update'])->name('ekstrakurikuler.update');
    Route::delete('/ekstrakurikuler/delete', [EkstrakurikulerController::class, 'delete'])->name('ekstrakurikuler.delete');

    Route::get('/tata-tertib', [TataTertibController::class, 'index'])->name('tataTertib.index');
    Route::post('/tata-tertib', [TataTertibController::class, 'store'])->name('tataTertib.store');
    Route::put('/tata-tertib/{id}', [TataTertibController::class, 'update'])->name('tataTertib.update');
    Route::delete('/tata-tertib/delete', [TataTertibController::class, 'delete'])->name('tataTertib.delete');
});

Route::prefix('admin/berita')->name('admin.berita.')->middleware('auth')->group(function() {
    Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index');
    Route::post('/pendidikan', [PendidikanController::class, 'store'])->name('pendidikan.store'); 
    Route::put('/pendidikan/{id}', [PendidikanController::class, 'update'])->name('pendidikan.update'); 
    Route::get('/pendidikan/{id}', [PendidikanController::class, 'delete'])->name('pendidikan.delete'); 

    Route::get('/kegiatan-sekolah', [KegiatanSekolahController::class, 'index'])->name('kegiatanSekolah.index');
    Route::post('/kegiatan-sekolah', [KegiatanSekolahController::class, 'store'])->name('kegiatanSekolah.store');
    Route::put('/kegiatan-sekolah/{id}', [KegiatanSekolahController::class, 'update'])->name('kegiatanSekolah.update');
    Route::get('/kegiatan-sekolah/{id}', [KegiatanSekolahController::class, 'delete'])->name('kegiatanSekolah.delete');
});

Route::prefix('admin/galeri')->name('admin.galeri.')->middleware('auth')->group(function() {
    Route::get('/foto', [FotoController::class, 'index'])->name('foto.index');
    Route::post('/foto', [FotoController::class, 'store'])->name('foto.store');
    Route::put('/foto/{id}', [FotoController::class, 'update'])->name('foto.update');
    Route::get('/foto/{id}', [FotoController::class, 'delete'])->name('foto.delete');
    Route::delete('/foto/truncate', [FotoController::class, 'truncate'])->name('foto.truncate');

    Route::get('/video', [VideoController::class, 'index'])->name('video.index');
    Route::post('/video', [VideoController::class, 'store'])->name('video.store');
    Route::put('/video/{id}', [VideoController::class, 'update'])->name('video.update');
    Route::get('/video/delete/{id}', [VideoController::class, 'delete'])->name('video.delete');
    Route::delete('/video/truncate', [VideoController::class, 'truncate'])->name('video.truncate');
});

Route::prefix('admin')->name('admin.prestasi.')->middleware('auth')->group(function() {
    Route::get('/prestasi', [PrestasiController::class, 'index'])->name('index');
    Route::post('/prestasi', [PrestasiController::class, 'store'])->name('store');
    Route::put('/prestasi/{id}', [PrestasiController::class, 'update'])->name('update');
    Route::get('/prestasi/delete/{id}', [PrestasiController::class, 'delete'])->name('delete');
});
