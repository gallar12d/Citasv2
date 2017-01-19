<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HorarioReserva extends Model
{
    //public $timestamps = false;
    protected $table = 'horarioreserva';
    protected $primarykey = 'id';
    protected $fillable = ['identificacion','nombres', 'apellidos', 'fechareserva', 'horareserva'];
}
