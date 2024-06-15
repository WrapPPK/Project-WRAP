<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. 
     */
    // $table->date('tanggal_minum1')->nullable();
    public function up(): void
    {
        Schema::create('waktu_minum', function (Blueprint $table) {
            $table->increments('id_waktuMinum');
            $table->unsignedBigInteger('id'); 
            $table->string('hari1')->nullable();
            $table->date('tanggal_minum1')->nullable();
            $table->enum('sudah_minum1', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum1')->nullable();
            $table->string('bukti_minum1')->nullable();
            $table->enum('sudah_minum2', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum2')->nullable();
            $table->string('bukti_minum2')->nullable();
            $table->enum('sudah_minum3', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum3')->nullable();
            $table->string('bukti_minum3')->nullable();
        
            $table->string('hari2')->nullable();
            $table->date('tanggal_minum2')->nullable();
            $table->enum('sudah_minum4', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum4')->nullable();
            $table->string('bukti_minum4')->nullable();
            $table->enum('sudah_minum5', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum5')->nullable();
            $table->string('bukti_minum5')->nullable();
            $table->enum('sudah_minum6', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum6')->nullable();
            $table->string('bukti_minum6')->nullable();
        
            $table->string('hari3')->nullable();
            $table->date('tanggal_minum3')->nullable();
            $table->enum('sudah_minum7', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum7')->nullable();
            $table->string('bukti_minum7')->nullable();
            $table->enum('sudah_minum8', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum8')->nullable();
            $table->string('bukti_minum8')->nullable();
            $table->enum('sudah_minum9', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum9')->nullable();
            $table->string('bukti_minum9')->nullable();
        
            $table->string('hari4')->nullable();
            $table->date('tanggal_minum4')->nullable();
            $table->enum('sudah_minum10', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum10')->nullable();
            $table->string('bukti_minum10')->nullable();
            $table->enum('sudah_minum11', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum11')->nullable();
            $table->string('bukti_minum11')->nullable();
            $table->enum('sudah_minum12', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum12')->nullable();
            $table->string('bukti_minum12')->nullable();
        
            $table->string('hari5')->nullable();
            $table->date('tanggal_minum5')->nullable();
            $table->enum('sudah_minum13', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum13')->nullable();
            $table->string('bukti_minum13')->nullable();
            $table->enum('sudah_minum14', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum14')->nullable();
            $table->string('bukti_minum14')->nullable();
            $table->enum('sudah_minum15', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum15')->nullable();
            $table->string('bukti_minum15')->nullable();
        
            $table->string('hari6')->nullable();
            $table->date('tanggal_minum6')->nullable();
            $table->enum('sudah_minum16', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum16')->nullable();
            $table->string('bukti_minum16')->nullable();
            $table->enum('sudah_minum17', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum17')->nullable();
            $table->string('bukti_minum17')->nullable();
            $table->enum('sudah_minum18', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum18')->nullable();
            $table->string('bukti_minum18')->nullable();
        
            $table->string('hari7')->nullable();
            $table->date('tanggal_minum7')->nullable();
            $table->enum('sudah_minum19', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum19')->nullable();
            $table->string('bukti_minum19')->nullable();
            $table->enum('sudah_minum20', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum20')->nullable();
            $table->string('bukti_minum20')->nullable();
            $table->enum('sudah_minum21', ['1', '0'])->default('0')->nullable();
            $table->time('waktu_minum21')->nullable();
            $table->string('bukti_minum21')->nullable();
        
            $table->timestamps();
            $table->foreign('id')->references('id')->on('pasiens')->onDelete('cascade');
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
