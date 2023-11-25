<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Biodata_Sekolah;
use App\Models\GaleriFoto;
use App\Models\GaleriVideo;
use App\Models\Guru;
use App\Models\Kepala_Sekolah;
use App\Models\LogoMotto;
use App\Models\Struktur_Organisasi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::count();
        $guru = Guru::count();
        $berita = Berita::count();
        $galeri = GaleriFoto::count() + GaleriVideo::count();
        $kepalaSekolah = Kepala_Sekolah::select('name', 'img')->first();
        $biodataSekolah = Biodata_Sekolah::first();
        $strukturOrganisasi = Struktur_Organisasi::select('img')->first();
        $logo = LogoMotto::select('img', 'description_logo')->first();

        return view('admin.dashboard', compact(
            'guru', 'berita', 'galeri',
            'kepalaSekolah', 'biodataSekolah', 'strukturOrganisasi',
            'logo', 'user',
        ));
    }
}
