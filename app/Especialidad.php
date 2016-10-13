<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    //
    protected $table = 'especialidades';
    protected $primarykey = 'id';
    protected $fillable = ['nombre', 'descripcion'];
}
