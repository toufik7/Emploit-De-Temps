<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModEnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mod_ens', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            
            $table->BigInteger('id_enseignent')->insigned();
            $table->foreign('id_enseignent')->references('id')->on('enseignent')->onDelete('cascade');

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
        Schema::dropIfExists('mod_ens');
    }
}
