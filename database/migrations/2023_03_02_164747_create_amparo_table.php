<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmparoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amparo', function (Blueprint $table) {
            $table->bigIncrements('id_amparo');
            $table->unsignedBigInteger('id_amparo_juicio');
            $table->string('parte',255)->nullable();
            $table->string('dir_indir',255)->nullable();
            $table->string('ad_dt',255)->nullable();
            $table->string('conceptode',255)->nullable();
            $table->string('aud_const2',255)->nullable();
            $table->string('fecha_sentencia',255)->nullable();
            $table->string('sentido_sentencia',255)->nullable();
            $table->string('recurso_amparo',255)->nullable();
            $table->string('parte_adherente',255)->nullable();
            $table->string('sentido_ad',255)->nullable();
            $table->string('fecha_ad',250)->nullable();
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
        Schema::dropIfExists('amparo');
    }
}
