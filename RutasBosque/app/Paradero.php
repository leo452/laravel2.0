<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paradero extends Model
{
    protected $fillable=[

        'nombre',
        'posicion_X',
        'posicion_Y'
    ];
}
