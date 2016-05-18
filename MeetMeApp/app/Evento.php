<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //atributos que serán asignados
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'nombre_evento', 'descripcion', 'ubicacion', 'creado_por', 'user_id'
    ];

    protected $hidden = [
    	'id'
    ];

}
