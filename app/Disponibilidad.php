<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disponibilidad extends Model
{
    //
    public $table = 'disponibilidad';

    protected $fillable = [
        'fecha', 'hora','estado', 'doctor_id',
    ];
    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }
}
