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
        Schema::create('master_rukun_tetangga', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable()->default(null);
            $table->integer('nomor')->nullable()->default(null);
            $table->string('telepon')->nullable()->default(null);
            $table->string('whatsapp')->nullable()->default(null);
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
        Schema::dropIfExists('master_rukun_tetangga');
    }
};