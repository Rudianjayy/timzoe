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
        Schema::create('teamupjtekajes', function (Blueprint $table) {
            $table->id();
            $table->string('foto_team');
            $table->string('nama_team');
            $table->string('jabatan_team');
            $table->string('fb')->nullable();
            $table->string('wa')->nullable();
            $table->string('ig')->nullable();
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
        Schema::dropIfExists('teamupjtekajes');
    }
};
