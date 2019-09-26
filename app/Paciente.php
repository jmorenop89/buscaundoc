<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    public $table = 'paciente';

    protected $fillable = [
        'nombres', 'apellidos', 'fecha_nac','celular','users_id'
    ];

}
