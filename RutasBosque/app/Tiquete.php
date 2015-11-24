<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiquete extends Model
{
    protected $fillable=[

        'fecha_generacion',
        'fecha_uso'

    ];
}
