<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('waktu_minum', function (Blueprint $table) {
            $table->increments('id_waktuMinum');
            $table->unsignedBigInteger('id'); 
            $table->string('hari')->nullable();
            $table->enum('sudah_minum', ['1', '0'])->nullable();
            $table->date('tanggal_minum')->nullable();
            $table->time('waktu_minum')->nullable();
            $table->string('bukti_minum')->nullable();
            $table->timestamps();
            $table->foreign('id')->references('id')->on('pasiens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waktu_minum');
    }
};
