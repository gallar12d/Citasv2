<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
     public $timestamps = false;
    protected $table = 'horarios';
    protected $primarykey = 'id';
    protected $fillable = ['nombre','descripcion', 'tipoatencion', 'horario', 'semana','fecha', 'primerdia', 'ultimodia'];

}
