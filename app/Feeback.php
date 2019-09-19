<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feeback extends Model
{
    //
    public $table = 'feedback';

    protected $fillable = [
        'contenido', 'doctor_id', 'paciente_id',
    ];
}
