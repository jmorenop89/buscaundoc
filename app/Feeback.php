<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feeback extends Model
{
    //
    public $table = 'contenido';

    protected $fillable = [
        'contenido', 'doctor_id', 'paciente_id',
    ];
}
