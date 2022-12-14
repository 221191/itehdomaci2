<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePredstavasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predstavas', function (Blueprint $table) {
            $table->id();
            $table->integer('sifraPredstave');
            $table->string('imePredstave');
            $table->double('cenaKarte',8,2);
            $table->foreignId('reditelj_id')->constrained('rediteljs');
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
        Schema::dropIfExists('predstavas');
    }
}
