<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DodajKolonuGodineRediteljs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rediteljs', function (Blueprint $table) {
            $table->after('prezimeReditelja', function($table){
                $table->integer('godine');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rediteljs', function (Blueprint $table) {
            $table->dropColumn('godine');
        });
    }
}
