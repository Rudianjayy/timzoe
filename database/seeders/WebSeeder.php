<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profilsekolahs')->insert([
            'judul' => 'Profil Sekolah',
            'deskripsi' => 'deskripsii',
            'foto' => '0.png',
            'foto_simuhi' => 'simuhi.png',
            'deskripsi_simuhi' => 'deskripsi simuhi',
        ]);
        DB::table('upjtentangkamis')->insert([
            'foto_tentangkami' => 'UPJ.png',
            'deskripsi_tentangkami' => 'TENTANG KAMI',
        ]);
        DB::table('visimisis')->insert([
            'judulvisi' => 'Visi',
            'deskripsivisi' => 'deskripsi visi',
            'judulmisi' => 'Misi',
            'deskripsimisi' => 'deskripsi misi',
        ]);

        DB::table('identitas_sekolahs')->insert([
            'namasekolah' => 'SMK Muhammadiyah 1 Genteng',
            'npsn' => '20525597',
            'alamat' => 'KH. AHMAD DAHLAN NO 10',
            'kecamatan' => 'GENTENG',
            'kabupaten' => 'BANYUWANGI',
            'provinsi' => 'JAWA TIMUR',
            'kodepos' => '68465',
            'telepon' => '(0333) 845605',
            'fax' => '(0333) 847370',
            'email' => 'smkmuhi.genteng1968@gmail.com',
            'facebook' => 'smkmuhigenteng',
            'instagram' => 'muhi.ig',
            'youtube' => 'MUHI.TV',
        ]);
    }
}
