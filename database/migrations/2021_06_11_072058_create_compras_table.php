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
            $table -> String('numero',400);
            $table -> String('vencimiento');
            $table -> String('cvv');
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
