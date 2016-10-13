<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

protected $table = 'usuarios';
protected $primarykey = 'id';
protected $fillable = ['name','email','contact_number','position', 'image'];

}
