<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    public $table = 'doctor';

    protected $fillable = [
        'nombres', 'apellidos', 'fecha_nac', 'cod_colegiatura', 'direccion' , 'user_id', 'especialidad_id', 'ciudad_id'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function especialidad(){
        return $this->belongsTo('App\Especialidad');
    }
    public function ciudad(){
        return $this->belongsTo('App\Ciudad');
    }
}
