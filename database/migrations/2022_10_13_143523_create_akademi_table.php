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
        Schema::create('akademis', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('judul_akademi');
            $table->text('deskripsi_akademi');
            $table->text('deskripsi_detail');
            $table->text('alamat');
            $table->string('email');
            $table->bigInteger('notelpon');
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
