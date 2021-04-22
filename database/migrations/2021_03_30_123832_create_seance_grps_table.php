<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeanceGrpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seance_grps', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->BigInteger ('id_groupe')->unsigned();
            $table->foreign('id_groupe')->references('id')->on('groupe')->onDelete('cascade');


            $table->BigInteger ('id_seance')->unsigned();
            $table->foreign('id_seance')->references('id')->on('seance')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seance_grps');
    }
}
