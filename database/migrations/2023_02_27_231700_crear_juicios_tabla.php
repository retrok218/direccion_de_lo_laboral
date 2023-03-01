<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearJuiciosTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juicios', function(Blueprint $table){
            $table->bigIncrements('id_juicio');

            $table->unsignedBigInteger('id_abogado_responsable')->nullable(); 
            $table->foreign('id_abogado_responsable')->references('id_abogado')->on('abogados'); //foranea de abogado responsable 

            $table->date('presentacion_de_demanda')->nullable();
            $table->string('salajnta',50)->nullable() ;
            $table->integer('expediente')->nullable() ;
            $table->year('año_juicio') ->nullable();
            $table->year('clasificacion_año') ->nullable();
            $table->integer('clasificacion_exp')->nullable() ;
            $table->string('tipo',50)->nullable() ;
            $table->string('accion',50)->nullable() ;                                   
            $table->timestamps();

            //externas con llave foranea

            $table->unsignedBigInteger('')->nullable();
            $table->unsignedBigInteger('')->nullable();
            $table->unsignedBigInteger('')->nullable();
            $table->unsignedBigInteger('')->nullable();
            $table->unsignedBigInteger('')->nullable();
            $table->unsignedBigInteger('')->nullable();
            $table->unsignedBigInteger('')->nullable();
            $table->unsignedBigInteger('')->nullable();
            $table->unsignedBigInteger('')->nullable();
            $table->unsignedBigInteger('')->nullable();
            $table->unsignedBigInteger('')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juicios');
    }
}
