<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

       
        Schema::create('juicios', function (Blueprint $table) {
            
            $table->bigIncrements('id_juicio');
           
            $table->date('presentacion_de_demanda')->nullable();
            $table->string('salajnta',50)->nullable() ;
            $table->integer('expediente')->nullable() ;
            $table->year('año_juicio') ->nullable();
            $table->year('clasificacion_año') ->nullable();
            $table->integer('clasificacion_exp')->nullable() ;
            $table->string('tipo',50)->nullable() ;
            $table->string('accion',50)->nullable() ;
            $table->string('comentario',500)->nullable();
            $table->timestamps();

            //foraneas
              
            $table->unsignedBigInteger('id_actores')->nullable(); 
            $table->foreign('id_actores')->references('id_actores')->on('actores');  

            $table->unsignedBigInteger('id_etapa')->nullable(); 
            $table->foreign('id_etapa')->references('id_etapa')->on('etapa');  

            $table->unsignedBigInteger('id_laudo')->nullable(); 
            $table->foreign('id_laudo')->references('id_laudo')->on('laudo'); 

            $table->unsignedBigInteger('id_amparo')->nullable(); 
            $table->foreign('id_amparo')->references('id_amparo')->on('amparo');  

            $table->unsignedBigInteger('id_etapaejecucion')->nullable();
            $table->foreign('id_etapaejecucion')->references('id_etapaejecucion')->on('etapaejecucion');

            $table->unsignedBigInteger('id_concluido')->nullable();
            $table->foreign('id_concluido')->references('id_concluido')->on('concluido');


        });

        Schema::create('juicioabogado', function (Blueprint $table) {
            $table->bigIncrements('id_juicioabogado');

            $table->unsignedBigInteger('id_juicio')->nullable(); 
            $table->unsignedBigInteger('id_abogado')->nullable();
            
            $table->foreign('id_juicio')->references('id_juicio')->on('juicios')->onDelete('cascade');
            $table->foreign('id_abogado')->references('id_abogado')->on('abogados')->onDelete('cascade');  
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
        Schema::dropIfExists('juicioabogado');
    }
}
