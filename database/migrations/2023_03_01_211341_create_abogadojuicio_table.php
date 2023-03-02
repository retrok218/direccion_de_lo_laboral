<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbogadojuicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abogadojuicio', function (Blueprint $table) {
            $table->bigIncrements('id_abogadojuicio');
            
            $table->unsignedBigInteger('id_abogado_responsable')->nullable(); 
            $table->foreign('id_abogado_responsable')->references('id_abogado')->on('abogados'); //foranea de abogado responsable 

            $table->unsignedBigInteger('id_juicio')->nullable(); 
            $table->foreign('id_juicio')->references('id_juicio')->on('juicios'); //foranea de abogado responsable 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abogadojuicio');
    }
}
