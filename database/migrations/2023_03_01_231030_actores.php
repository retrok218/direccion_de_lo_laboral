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
            $table->string('Nombre_completo',50)->nullable();
            $table->string('adscripcion')->nullable();
            $table->string('ur')->nullable();            
            $table->string('denominacion')->nullable();
            $table->string('puesto')->nullable();
            $table->string('nivel')->nullable();            
            $table->integer('salarioMen')->nullable();
            $table->date('inrellab')->nullable();
            $table->date('finrellab')->nullable();

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
