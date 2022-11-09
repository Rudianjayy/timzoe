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
        Schema::create('deskripsipendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('judul_slider');
            $table->text('deskripsi_slider');
            $table->text('deskripsi_pendaftaran');
            $table->text('deskripsi_kontak');
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
        Schema::dropIfExists('deskripsipendaftarans');
    }
};
