<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Biodata_Sekolah;
use App\Models\Ekstrakurikuler;
use App\Models\GaleriFoto;
use App\Models\GaleriVideo;
use App\Models\Guru;
use App\Models\Kepala_Sekolah;
use App\Models\LogoMotto;
use App\Models\Prestasi;
use App\Models\SaranaPrasarana;
use App\Models\Sejarah_Sekolah;
use App\Models\Struktur_Organisasi;
use App\Models\TataTertib;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $galeriFoto = GaleriFoto::orderBy('id', 'desc')->take(2)->get();
        $galeriVideo = GaleriVideo::orderBy('id', 'desc')->take(2)->get();
        $berita = Berita::orderBy('id', 'desc')->take(6)->get();
        $kepalaSekolah = Kepala_Sekolah::select('name', 'img')->first();
        return view('Home.index', compact('berita', 'galeriFoto', 'galeriVideo', 'kepalaSekolah'));
    }

    // profile

    public function sejarah() {
        $sejarah = Sejarah_Sekolah::first();
        return view('Home.profile.sejarah', compact('sejarah'));
    }

    public function kepalaSekolah() {
        $kepalaSekolah = Kepala_Sekolah::first();
        return view('Home.profile.kepalaSekolah', compact('kepalaSekolah'));
    }

    public function strukturOrganisasi() {
        $strukturOrganisasi = Struktur_Organisasi::select('img')->first();
        return view('Home.profile.strukturOrganisasi', compact('strukturOrganisasi'));
    }

    public function visiMisi() {
        $visiMisi = VisiMisi::select('visi', 'misi')->first();
        return view('Home.profile.visiMisi', compact('visiMisi'));
    }

    public function logoMotto() {
        $logoMotto = LogoMotto::select('img', 'description_logo', 'motto')->first();
        return view('Home.profile.logoMotto', compact('logoMotto'));
    }

    // dapodik
    public function biodataSekolah() {
        $biodataSekolah = Biodata_Sekolah::first();
        return view('Home.dapodik.biodataSekolah', compact('biodataSekolah'));
    }

    public function guruTendik() {
        $dataGuru = Guru::all();
        return view('Home.dapodik.guru', compact('dataGuru'));
    }

    public function saranaPrasarana() {
        $saranaPrasarana = SaranaPrasarana::first();
        return view('Home.dapodik.saranaPrasarana', compact('saranaPrasarana'));
    }

    // tata tertib
    public function tataTertib() {
        $tataTertib = TataTertib::first();
        return view('Home.tataTertib.tataTertib', compact('tataTertib'));
    }

    // ekstrakurikuler
    public function ekstrakurikuler() {
        $ekstrakurikuler = Ekstrakurikuler::first();
        return view('Home.ekstrakurikuler.index', compact('ekstrakurikuler'));
    }

    // berita
    public function beritaPendidikan() {
        $berita = Berita::where('kategori', 'pendidikan')->paginate(9);
        // dd($berita);
        return view('Home.berita.pendidikan', compact('berita'));
    }

    public function kegiatanSekolah() {
        $berita = Berita::where('kategori', 'kegiatan sekolah')->paginate(9);
        return view('Home.berita.kegiatan-sekolah', compact('berita'));
    }

    public function detaiBerita($id) {
        $detailBerita = Berita::findOrFail($id);
        // dd($detailBerita);
        return view('Home.berita.detail', compact('detailBerita'));
    }

    // galeri
    public function galeriFoto() {
        $galeriFoto = GaleriFoto::paginate(9);
        return view('Home.galeri.foto.index', compact('galeriFoto'));
    }

    public function detailFoto($id) {
        $galeriFoto = GaleriFoto::where('id', $id)->select('img')->first();
        $image = json_decode($galeriFoto);
        return view('Home.galeri.foto.detail', compact('galeriFoto'));
    }

    public function galeriVideo() {
        $galeriVideo = GaleriVideo::all();
        return view('Home.galeri.video.index', compact('galeriVideo'));
    }

    public function detailVideo($id) {
        $galeriVideo = GaleriVideo::findOrFail($id);
        return view('Home.galeri.video.detail', compact('galeriVideo'));
    }

    // prestasi
    public function prestasi() {
        $prestasi = Prestasi::paginate(9);
        return view('Home.prestasi.index', compact('prestasi'));
    }

    public function detailPrestasi($id) {
        $detailPrestasi = Prestasi::findOrFail($id);
        return view('Home.prestasi.detail', compact('detailPrestasi'));
    }
    
}
