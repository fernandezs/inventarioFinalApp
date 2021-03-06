<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmpresConfigurationAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('configuracions', function (Blueprint $table) {
                $table->string('empresa');
            });
            $affected = DB::update('update configuracions set empresa = ?', ['Avianca Ec']);


            Schema::table('configuracions', function (Blueprint $table) {

                $table->foreign('empresa')->references('empresa')->on('empresas');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('configuracions', function (Blueprint $table) {
            //
        });
    }
}
