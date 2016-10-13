<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Empresas
 *
 * @author  The scaffold-interface created at 2016-09-27 12:10:22am
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class Empresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('empresas',function (Blueprint $table){
        $table->increments('id');
        $table->String('nombre');
        $table->String('direccion');
        $table->String('ruc');
        $table->String('correo');
        $table->String('telefono');
        $table->string('image');

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
        Schema::drop('empresas');
     }
}
