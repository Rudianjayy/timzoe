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
        Schema::create('suratkelulusans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('nisn');
            $table->string('tanggal_lahir');
            $table->enum('hasil',['lulus','tidaklulus']);
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
        Schema::dropIfExists('suratkelulusans');
    }
};
