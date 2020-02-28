<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{   //Modelo enlazado a la tabla
    protected $table ="marcas";
    //listado de items
    protected $fillable =[
        'id',
        'orden',
        'data',
        'data->nombre',
        'data->foto',
        
    ];

    protected $casts = [
        'data' => 'array'
    ];
}
