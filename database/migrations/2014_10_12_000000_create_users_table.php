<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table -> id();
            $table -> String('name',50);
            $table -> String('a_paterno',50);
            $table -> String('a_materno',50);
            $table -> String('email',100);
            $table -> String('password',200);
            $table -> String('imagen',400);
            $table -> String('rol',50);
            $table -> String('activo',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
