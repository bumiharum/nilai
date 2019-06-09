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
            $table->integer('S1')->nullable();
            $table->decimal('P1')->nullable();
            $table->decimal('K1')->nullable();
            $table->integer('S2')->nullable();
            $table->decimal('P2')->nullable();
            $table->decimal('K2')->nullable();
            $table->integer('S3')->nullable();
            $table->decimal('P3')->nullable();
            $table->decimal('K3')->nullable();
            $table->integer('S4')->nullable();
            $table->decimal('P4')->nullable();
            $table->decimal('K4')->nullable();
            $table->integer('S5')->nullable();
            $table->decimal('P5')->nullable();
            $table->decimal('K5')->nullable();
            $table->integer('S6')->nullable();
            $table->decimal('P6')->nullable();
            $table->decimal('K6')->nullable();
            $table->decimal('NB')->nullable();
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
