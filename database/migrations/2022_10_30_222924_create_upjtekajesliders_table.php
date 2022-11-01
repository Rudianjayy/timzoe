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
        Schema::create('upjtekajesliders', function (Blueprint $table) {
            $table->id();
            $table->string('foto_slider1');
            $table->string('foto_slider2');
            $table->string('foto_slider3');
            $table->string('foto_slider4');
            $table->string('judul_slider');
            $table->string('deskripsi_slider');
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
        Schema::dropIfExists('upjtekajesliders');
    }
};
