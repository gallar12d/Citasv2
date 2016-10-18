<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendadoctor extends Model
{
    public $timestamps = false;
    protected $table = 'agendadoctores';
    protected $primarykey = 'id';
    protected $fillable = ['medico_id','start'];
}
