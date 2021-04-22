<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupes', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->string('nom');

            $table->BigInteger('id_specialite')->unsigned();
            $table->foreign('id_specialite')->references('id')->on('specialite')->onDelete('cascade');

            $table->BigInteger('id_promotion')->unsigned();
            $table->foreign('id_promotion')->references('id')->on('promotion')->onDelete('cascade');

            $table->string('nb_etudiants');
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
        Schema::dropIfExists('groupes');
    }
}
