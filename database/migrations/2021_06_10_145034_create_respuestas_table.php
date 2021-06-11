<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table -> String('respuesta',200);
            $table -> unsignedBigInteger('pregunta_id')->nullable();
            $table -> foreign('pregunta_id')
                    ->references('id')
                    ->on('preguntas')
                    ->onDelete('set null');
            $table -> unsignedBigInteger('quienr_id')->nullable();
            $table -> foreign('quienr_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
