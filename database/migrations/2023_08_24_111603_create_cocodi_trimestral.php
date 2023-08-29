<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCocodiTrimestral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cocodi_trimestral', function (Blueprint $table) {
            $table->bigIncrements('id_cocodi');
            $table->unsignedBigInteger('juicio_id');
            $table->integer('ano_trimestre');
            $table->integer('trimestre');
            $table->decimal('cantidad',20,2)->nullable();
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
        Schema::dropIfExists('cocodi_trimestral');
    }
}
