<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ObrisiCenuKartePredstavas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('predstavas', function (Blueprint $table) {
            $table->dropColumn('cenaKarte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('predstavas', function (Blueprint $table) {
            $table->after('imePredstave', function($table){
                $table->double('cenaKarte',8,2);
            });

        });
    }
}
