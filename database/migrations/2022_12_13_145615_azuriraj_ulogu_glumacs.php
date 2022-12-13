<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AzurirajUloguGlumacs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('glumacs', function (Blueprint $table) {
            $table->renameColumn('uloga', 'opisUloge');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('glumacs', function (Blueprint $table) {
            $table->renameColumn('opisUloge', 'uloga');
        });
    }
}
