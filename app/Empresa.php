<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmpresaController
 *
 * @author  The scaffold-interface created at 2016-09-27 12:10:22am
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class Empresa extends Model
{

    public $timestamps = false;
    protected $table = 'empresas';
    protected $primarykey = 'id';
    protected $fillable = ['nombre','direccion','ruc','correo','telefono','image'];

}
