<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    //
    public $table = "cita";

    protected $fillable = [
    	'disponibilidad_id', 'paciente_id'
    ]
}
