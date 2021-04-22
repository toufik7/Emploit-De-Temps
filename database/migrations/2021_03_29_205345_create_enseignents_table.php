<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignents', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->string('nom');
            $table->string('prenom');

            $table->BigInteger('id_emploit')->unsigned();
            $table->foreign('id_emploit')->references('id')->on('emploit')->onDelete('cascade'); 
            
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
        Schema::dropIfExists('enseignents');
    }
}
