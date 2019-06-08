<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('semester_1')->nullable();
            $table->integer('pengetahuan_1')->nullable();
            $table->integer('keterampilan_1')->nullable();
            $table->integer('semester_2')->nullable();
            $table->integer('pengetahuan_2')->nullable();
            $table->integer('keterampilan_2')->nullable();
            $table->integer('semester_3')->nullable();
            $table->integer('pengetahuan_3')->nullable();
            $table->integer('keterampilan_3')->nullable();
            $table->integer('semester_4')->nullable();
            $table->integer('pengetahuan_4')->nullable();
            $table->integer('pketerampilan_4')->nullable();
            $table->integer('semester_5')->nullable();
            $table->integer('pengetahuan_5')->nullable();
            $table->integer('keterampilan_5')->nullable();
            $table->integer('semester_6')->nullable();
            $table->integer('pengetahuan_6')->nullable();
            $table->integer('keterampilan_6')->nullable();
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
        Schema::dropIfExists('pai');
    }
}
