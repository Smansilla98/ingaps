<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumos extends Model
{ //Modelo enlazado a la tabla
    protected $table ="insumos";
    //listado de items
    protected $fillable =[
        'id',
        'orden',
        'data',
        'data->nombre',
        'data->descripcion',
       
    ];

    protected $casts = [
        'data' => 'array'
    ];
}
