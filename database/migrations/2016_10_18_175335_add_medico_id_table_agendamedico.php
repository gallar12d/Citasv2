<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMedicoIdTableAgendamedico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agendadoctores', function (Blueprint $table) {
        $table->integer('medico_id')->unsigned();
        $table->foreign('medico_id')->references('id')->on('medicos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {

            $table->dropColumn('medico_id');

        });
    }
}
