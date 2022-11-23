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
        Schema::create('albumidukas', function (Blueprint $table) {
            $table->id();
            $table->string('foto_otkp');
            $table->string('foto_tjkt');
            $table->string('foto_akl');
            $table->string('foto_ph');
            $table->string('foto_dkv');
            $table->string('foto_pplg');
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
        Schema::dropIfExists('albumidukas');
    }
};
