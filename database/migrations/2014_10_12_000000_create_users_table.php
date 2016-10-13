<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('usuario')->unique();
            $table->string('password', 60);
            $table->string('name');
            $table->string('apellidos');
            $table->string('dni')->unique();
            $table->string('email')->unique();
            $table->string('direccion');
            $table->string('telefono');
            $table->string('foto');
            $table->string('empresa');
            $table->string('cargo');
            $table->string('genero');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
