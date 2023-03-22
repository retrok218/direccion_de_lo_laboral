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
            $table->date('noti_demanda')->nullable();
            $table->date('presentacion_de_demanda')->nullable();            
            $table->string('expediente',50)->nullable() ;
            $table->year('año_juicio') ->nullable();
            $table->year('clasificacion_año') ->nullable();
            $table->integer('clasificacion_exp')->nullable() ;
            $table->string('tipo',50)->nullable() ;
            $table->string('accion',50)->nullable() ;
            $table->string('etapa',30)->nullable();
            //$table->string('comentario',500)->nullable();
            $table->timestamps();

            //foraneas


            

            $table->unsignedBigInteger('id_actores')->nullable(); 
            $table->foreign('id_actores')->references('id_actores')->on('actores');  

          

            $table->unsignedBigInteger('id_laudo')->nullable(); 
            $table->foreign('id_laudo')->references('id_laudo')->on('laudo'); 

            $table->unsignedBigInteger('id_amparo')->nullable(); 
            $table->foreign('id_amparo')->references('id_amparo')->on('amparo');             

            $table->unsignedBigInteger('id_concluido')->nullable();
            $table->foreign('id_concluido')->references('id_concluido')->on('concluido');

            $table->unsignedBigInteger('id_sala')->nullable() ;
            $table->foreign('id_sala')->references('id_sala')->on('salas'); 

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
