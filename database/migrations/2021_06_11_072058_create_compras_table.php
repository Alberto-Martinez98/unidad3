<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table -> String('nombre',50);
            $table -> String('direccion',400);
            $table -> String('telefono');
            $table -> Integer('cantidad');
            $table -> Float('monto');
            $table -> String('imagen',400)->nullable();
            $table -> unsignedBigInteger('producto_id')->nullable();
            $table -> foreign('producto_id')
                    ->references('id')
                    ->on('productos')
                    ->onDelete('set null');
            $table -> unsignedBigInteger('user_id')->nullable();
            $table -> foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('set null');
            $table->tinyInteger('comprado')->nullable();
            $table->string('motivo')->nullable();
            $table->string('nota')->nullable();
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
        Schema::dropIfExists('compras');
    }
}
