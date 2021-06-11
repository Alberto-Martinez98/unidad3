<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table -> String('pregunta',50);
            $table -> String('respuesta',400)->nullable();
            $table -> unsignedBigInteger('producto_id')->nullable();
            $table -> foreign('producto_id')
                    ->references('id')
                    ->on('productos')
                    ->onDelete('set null');
            $table -> unsignedBigInteger('quienp_id')->nullable();
            $table -> foreign('quienp_id')
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
        Schema::dropIfExists('preguntas');
    }
}
