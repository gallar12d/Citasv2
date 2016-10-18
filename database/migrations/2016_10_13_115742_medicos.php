<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Medicos
 *
 * @author  The scaffold-interface created at 2016-10-13 11:57:42pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class Medicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('medicos',function (Blueprint $table){

        $table->increments('id');
        $table->String('Nombres');
        $table->String('Apellidos');
        $table->integer('Identificacion');
        $table->integer('departamento_id')->unsigned();
        $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade');
        $table->integer('municipio_id')->unsigned();
        $table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('cascade');
        $table->date('Fecha_nac');
        $table->integer('Celular');
        $table->String('email');
        $table->String('Direccion');

        /**
         * Foreignkeys section
         */

        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('medicos');
     }
}
