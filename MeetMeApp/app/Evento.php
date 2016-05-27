<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //atributos que serán asignados

    protected $table = 'eventos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'nombre_evento', 'descripcion', 'ubicacion', 'fecha_ini', 'user_id', 'fecha_fin', 'asistentes'
    ];

    protected $dates = [ 'fecha_ini', 'fecha_fin' ];

    protected $hidden = [
    	'id'
    ];

}
