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
        Schema::create('penduduk_agama', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('penduduk_id', false, true)->nullable()->default(null);
            $table->bigInteger('agama_id', false, true)->nullable()->default(null);
            $table->date('dari')->nullable()->default(null);
            $table->date('sampai')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('penduduk_id')
                ->references('id')->on('penduduks')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign('agama_id')
                ->references('id')->on('master_agama')
                ->nullOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduk_agama');
    }
};
