<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaudoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laudo', function (Blueprint $table) {
            $table->bigIncrements('id_laudo');
            $table->unsignedBigInteger('laudo_id_juicio');
            $table->date('lau_fecha')->nullable();
            $table->string('lau_sentido')->nullable();
            $table->string('reinstalacion')->nullable();
            $table->string('indemnizacion')->nullable();
            $table->string('pasivo_total')->nullable();
            $table->date('f_notificacion_laudo')->nullable();
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
        Schema::dropIfExists('laudo');
    }
}
