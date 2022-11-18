<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peserta');
            $table->enum('jeniskelamin', ['laki-laki','perempuan']);
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('agama');
            $table->bigInteger('nisn');
            $table->bigInteger('nik');
            $table->bigInteger('nokk');
            $table->string('foto_kk');
            $table->string('foto_bukti');
            $table->string('status_anak');
            $table->text('alamat_rumah');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('sekolah_asal');
            $table->bigInteger('notelpon_siswa');
            $table->bigInteger('notelpon_orangtua');
            $table->string('prestasi');
            $table->string('ukuran_kaos');
            $table->string('jurusan');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulirs');
    }
};
