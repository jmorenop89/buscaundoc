<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    //
    public $table = 'ciudad';

    protected $fillable = [
        'nombre'
    ];
}
