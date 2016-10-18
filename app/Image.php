<?php

namespace App;
use App\Medico;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $primarykey = 'id';
    protected $fillable = ['name','medico_id'];

public function medico() {
        return $this->belongsTo(Medico::class, 'medico_id');

    }
}

