<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modul_specs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('id_specialite')->insigned();
            $table->foreign('id_specialite')->references('id')->on('specialite')->onDelete('cascade');

            $table->BigInteger('id_module')->insigned();
            $table->foreign('id_module')->references('id')->on('module')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modul_specs');
    }
}
