<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicoEspecialidad extends Model
{

    protected $table = 'medico_especialidad';
    protected $primarykey = 'id';
    protected $fillable = ['status', 'medico_id', 'especialidad_id'];

}
