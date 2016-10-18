<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusTableMedicoEspecialidaad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('medico_especialidad', function ($table) {
      $table->boolean('status');

    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

     Schema::table('medico_especialidad', function ($table) {
      $table->dropColumn('status');

    });

    }
}
