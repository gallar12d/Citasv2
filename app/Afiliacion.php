<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afiliacion extends Model
{

    protected $table = 'afiliaciones';
    protected $primarykey = 'id';
    protected $fillable = ['codigo_empresa','nombre'];

}
