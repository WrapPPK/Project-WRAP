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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('gender', ['male', 'female']);
            $table->integer('age');
            $table->string('phone_number')->nullable();
            $table->date('date');
            $table->string('disease');
            $table->string('medicine');
            $table->string('dose');
            $table->enum('how_many_time', ['1','2','3']);
            $table->enum('how_many_time_a_day', ['1 day','2 day','3 day']);
            $table->time('when');
            $table->date('time_period_start');
            $table->date('time_period_end');
            $table->enum('stage', ['Critical','Medium','Low']);
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('patients');
    }
};
