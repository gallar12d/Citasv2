<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamiento extends Model
{

    public $timestamps = false;
    protected $table = 'agendamientos';
    protected $primarykey = 'id';
    protected $fillable = ['title', 'color', 'start', 'end'];
}
