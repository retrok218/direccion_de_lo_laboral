<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCocodiJuicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cocodi_juicio', function (Blueprint $table) {
           
            $table->bigIncrements('id_cocodi');
            $table->integer('id_juicio');
            $table->integer('num_trimestre');
            $table->decimal('cantidad',20,2)->nullable();
            $table->integer('año_trimestre');            
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
        Schema::dropIfExists('cocodi_juicio');
    }
}
