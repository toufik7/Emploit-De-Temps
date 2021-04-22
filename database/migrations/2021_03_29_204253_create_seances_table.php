<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) { // seance lié a un emploit
            $table->bigIncrements('id'); 
             //cle etrangere

            $table->BigInteger ('id_emploit')->unsigned();
            $table->foreign('id_emploit')->references('id')->on('emploit')->onDelete('cascade');

            $table->BigInteger ('id_type_seance')->unsigned();
            $table->foreign('id_type_seance')->references('id')->on('type_seance')->onDelete('cascade'); 

            $table->BigInteger ('id_module')->unsigned();
            $table->foreign('id_module')->references('id')->on('module')->onDelete('cascade');


            $table->BigInteger ('id_enseignent')->unsigned();
            $table->foreign('id_enseignent')->references('id')->on('enseignent')->onDelete('cascade');

            $table->BigInteger ('id_salle')->unsigned();
            $table->foreign('id_salle')->references('id')->on('salle')->onDelete('cascade');
           
            $table->string('debut');
            $table->string('fin');
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
        Schema::dropIfExists('seances');
    }
}
