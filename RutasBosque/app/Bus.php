<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable=[

        'placa',
        'capacidad',
        'descripcion',
        'user_id'
    ];


    /**
     * Un bus pertenece a un usuario
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Users(){

        return $this->belongsTo('App\Users');


    }

}
