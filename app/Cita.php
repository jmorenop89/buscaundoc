<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    //
    public $table = "cita";

    protected $fillable = [
    	'disponibilidad_id', 'paciente_id'
    ];

    public function paciente(){
        return $this->belongsTo('App\Paciente');
    }

    public function disponibilidad(){
        return $this->belongsTo('App\Disponibilidad');
    }
}
