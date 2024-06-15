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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nama_obat');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('age');
            $table->string('gender');
            $table->string('status');
            $table->string('level');
            $table->string('disease');
            $table->integer('time_to_take_medicine');
            $table->string('medication_times');
            $table->date('mulai_minum')->nullable();
            $table->date('akhir_minum')->nullable();
            $table->string('photo')->nullable();

            // // 
            // $table->enum('sudah_minum1', ['Ya', 'Belum'])->nullable();
            // $table->date('tanggal_minum1')->nullable();
            // $table->time('waktu_minum1')->nullable();
            // $table->string('bukti_minum1')->nullable();

            // $table->enum('sudah_minum2', ['Ya', 'Belum'])->nullable();
            // $table->date('tanggal_minum2')->nullable();
            // $table->time('waktu_minum2')->nullable();
            // $table->string('bukti_minum2')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
