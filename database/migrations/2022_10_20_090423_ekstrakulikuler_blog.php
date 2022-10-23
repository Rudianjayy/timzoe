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
        Schema::create('ekstrakulikulerblogs', function (Blueprint $table) {
            $table->id();
            $table->string('judul_blog');
            $table->string('foto');
            $table->text('deskripsi_blog');
            $table->string('kategori_blog');
            $table->string('muhinews_blog');
            $table->string('nama');
            $table->string('notelpon');
            $table->string('email');
            $table->string('subjek');
            $table->text('pesan');
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
        //
    }
};
