<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    public $table = 'doctor';

    protected $fillable = [
        'nombres', 'apellidos', 'fecha_nac', 'cod_colegiatura', 'direccion' , 'users_id', 'especialidad_id', 'ciudad_id'
    ];
}
