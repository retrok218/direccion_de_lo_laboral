<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtapaejecucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etapaejecucion', function (Blueprint $table) {
            $table->bigIncrements('id_etapaejecucion');
            $table->unsignedBigInteger('id_etapaejecucion_juicio');            
            $table->date('fechacumpreinstalacion')->nullable();
            $table->date('notf2')->nullable();
            $table->string('r_h',50)->nullable();
            $table->date('vence')->nullable();
            $table->string('sentido',255)->nullable();
            $table->string('solicitadoarh')->nullable();
            $table->float('cantidad')->nullable();
            $table->string('folio',150)->nullable();
            $table->string('nodeintento')->nullable();
            $table->date('fechaproxima')->nullable();
            $table->text('cumplimiento')->nullable();
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
        Schema::dropIfExists('etapaejecucion');
    }
}
