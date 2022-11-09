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
        DB::table('upjfooters')->insert([
            'tentang_upj' => 'SMK Muhammadiyah 1 Genteng',
            'yt' => 'https://www.youtube.com/channel/UCpVsjRZNiWAtny5O77bnHGA',
            'fb' => 'https://www.facebook.com/profile.php?id=100067357426555',
            'ig' => 'https://www.instagram.com/upjtekaje/',
            'wa' => 'https://wa.wizard.id/',
            'alamat' => 'KH. AHMAD DAHLAN NO 10',
            'email' => 'smkmuhi.genteng1968@gmail.com',
        ]);

        DB::table('sambutans')->insert([
            'foto' => '../images/avatar/kepsekremove.png',
            'deskripsi' => 'Sambutan Kepsek',
        ]);
        DB::table('footeers')->insert([
            'foto' => '../images/logo/0.png',
            'deskripsi_footeer' => 'Deskripsi Footer',
        ]);
        DB::table('oses')->insert([
            'foto' => '../images/logo/ipm1.jpeg',
            'judul_osis' => 'Judul',
            'deskripsi_osis' => 'Deskripsi osis',
        ]);
        DB::table('bsis')->insert([
            'foto' => '../images/logo/bsi.png',
            'deskripsi_bsi' => 'Deskripsi bsi',
        ]);
        DB::table('printings')->insert([
            'foto_muhiprint' => '../images/logo/mp3.jpeg',
            'deskripsi_muhiprint' => 'Deskripsi Muhiprinting',
        ]);
        DB::table('pegadaians')->insert([
            'foto_gadai' => '../images/logo/pegadaian.png',
            'deskripsi_gadai' => 'Deskripsi Pegadaian',
        ]);
        DB::table('suryamarts')->insert([
            'foto_surya' => '../images/post/sm3.jpeg',
            'deskripsi_surya' => 'Deskripsi Surya Mart',
        ]);
        DB::table('edotels')->insert([
            'foto_edotel' => '../assets/images/logo/ph3.jpeg',
            'deskripsi_edotel' => 'Deskripsi Edotel',
        ]);
        DB::table('idukas')->insert([
            'judul_iduka' => 'Judul',
            'deskripsi_iduka' => 'Deskripsi',
        ]);


















        // upjtekaje

        DB::table('upjtentangkamis')->insert([
            'foto_tentangkami' => 'UPJ.png',
            'deskripsi_tentangkami' => 'TENTANG KAMI',
        ]);
        DB::table('upjtekajesliders')->insert([
            'foto_slider1' => 'album2.jpg',
            'foto_slider2' => 'album12.jpg',
            'foto_slider3' => 'service-d-1.jpg',
            'foto_slider4' => 'service-d-3.jpg',
            'judul_slider' => 'SMK Muhammadiyah 1 Genteng',
            'deskripsi_slider' => 'Unit produksi dan jasa Teknik Komputer dan Jaringan',
        ]);
        DB::table('upjvisimisis')->insert([
            'upj_visi' => 'Visi',
            'upj_misi' => 'misi',
            'foto_bg' => 'bg2.jpeg',
            'link_yt' => 'https://www.youtube.com/watch?v=FTTBAw6R2EY',
        ]);

        // PPDB
        DB::table('deskripsipendaftarans')->insert([
            'judul_slider' => 'Ayo Daftar sekarang!',
            'deskripsi_slider' => 'Mulai tanggal 10-22 Januari terdapat diskon sebesar 50%',
            'deskripsi_pendaftaran' => 'Dibawah ini merupakan beberapa cara pendaftaran untuk PPDB Online',
            'deskripsi_kontak' => 'Silahkan hubungi kontak di bawah ini jika ada pertanyaan atau perlu bantuan',
            
        ]);

    }
}
