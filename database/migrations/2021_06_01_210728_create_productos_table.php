<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table -> id();
            $table -> String('nombre',50);
            $table -> String('descripcion',400);
            $table -> Float('precio');
            $table -> Integer('cantidad');
            $table -> String('imagen',400);
            $table -> unsignedBigInteger('categoria_id')->nullable();
            $table -> foreign('categoria_id')
                    ->references('id')
                    ->on('categorias')
                    ->onDelete('set null');
            $table -> unsignedBigInteger('user_id')->nullable();
            $table -> foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('set null');
            $table->tinyInteger('aceptado')->nullable();
            $table->string('motivo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
