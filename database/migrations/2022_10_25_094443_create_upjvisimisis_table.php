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
        Schema::create('upjvisimisis', function (Blueprint $table) {
            $table->id();
            $table->string('upj_visi');
            $table->string('upj_misi');
            $table->string('foto_bg');
            $table->string('link_yt');
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
        Schema::dropIfExists('upjvisimisis');
    }
};
