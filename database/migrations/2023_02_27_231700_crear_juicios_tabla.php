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

            $table->string('id_abogado_responsable'); //cambiar a foranea para abogados

            $table->date('presentacion_de_demanda');
            $table->string('salajnta',50) ;
            $table->integer('expediente') ;
            $table->year('año_juicio') ;
            $table->year('clasificacion_año') ;
            $table->integer('clasificacion_exp') ;
            $table->string('tipo',50) ;
            $table->string('accion',50) ;
            
            $table->
            
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
        Schema::dropIfExists('juicios');
    }
}
