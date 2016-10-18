<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Especialidad;
use App\Departamento;
use App\Municipio;


/**
 * Class MedicoController
 *
 * @author  The scaffold-interface created at 2016-10-13 11:57:42pm
 * @link  https://github.com/amranidev/scaffold-interfac
 */
class Medico extends Model
{

    public $timestamps = false;
    protected $table = 'medicos';
    protected $primarykey = 'id';
    protected $fillable = ['Nombres', 'Apellidos', 'Identificacion', 'departamento_id','municipio_id', 'Fecha_nac','Celular','email', 'especialidad', 'Direccion'];


public function departamentos() {
        return $this->belongsTo(Departamento::class, 'departamento_id');
    }


public function municipios() {
        return $this->belongsTo(Municipio::class, 'municipio_id');
    }


public function tags(){
 return $this->belongsToMany(Especialidad::class,'medico_especialidad')
->withPivot('especialidad_id','status');

  }



}
