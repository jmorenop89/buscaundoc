<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    public $table = 'paciente';

    protected $fillable = [
        'nombres', 'apellidos', 'fecha_nac','celular','users_id'
    ];

    public function user(){
    	return $this->belongsTo('App\User','users_id');
    }

}
