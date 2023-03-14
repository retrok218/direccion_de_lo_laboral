<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->bigIncrements('id_sala');
            $table->string('nombre_sala');
            $table->timestamps();                       
        });



        Schema::create('abogado_salas', function (Blueprint $table) {
           

            $table->unsignedBigInteger('id_sala'); 
            $table->unsignedBigInteger('id_abogado');
        
            $table->foreign('id_sala'
            )->references('id_sala')->on('salas')->nullable()->onDelete('cascade');           
            $table->foreign('id_abogado')
            ->references('id_abogado')->on('abogados')->nullable()->onDelete('cascade');  
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salas');
        Schema::dropIfExists('abogados_salas');
    }
}
