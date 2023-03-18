<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Actores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actores',function(Blueprint $table){
            $table->bigIncrements('id_actores');
            $table->unsignedBigInteger('juicio_id');
            $table->string('nombre_completo',50)->nullable();
            $table->string('adscripcion')->nullable();
            $table->string('ur')->nullable();            
            $table->string('denominacion')->nullable();
            $table->string('puesto')->nullable();
            $table->string('nivel')->nullable();            
            $table->integer('salarioMen')->nullable();
            $table->date('inicio_rellab')->nullable();
            $table->date('terminacion_rellab')->nullable();

            $table->date('exp_personal_rh_solicitud')->nullable();
            $table->date('exp_personal_rh_devolucion')->nullable();
            $table->string('fojas')->nullable();
            
            $table->date('exp_adscripcion_solicitud')->nullable();
            $table->date('exp_adscripcion_devolucion')->nullable();
            $table->string('audiencia')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('cierredeinstruccion',200)->nullable();




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actores');
    }
}
