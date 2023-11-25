<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodataSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodata_sekolah')->insert([
            'name' => 'SD Negeri 023 Balikpapan Utara',
            'npsn' => 30401386,
            'akreditasi' => 'A',
            'jenjang' => 'SD',
            'status' => 'NEGERI',
            'alamat' => 'Jl.Soekarno Hatta Strat VI No. 27 Rt.49',
            'kode_pos' => 76125,
            'kelurahan' => 'Gunung Samarinda',
            'kecamatan' => 'Balikpapan Utara',
            'kota' => 'Balikpapan',
            'provinsi' => 'Kalimantan Timur',
            'negara' => 'Indonesia',
            'no_tlpn' => 5428509379,
            'no_fax' => 5428509379,
            'email' => 'sdn023bu@gmail.com',
            'created_at' => Carbon::now(),
        ]);
    }
}
