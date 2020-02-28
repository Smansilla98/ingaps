<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{   //Modelo enlazado a la tabla
    protected $table ="categorias";
    //listado de items
    protected $fillable =[
        'id',
        'orden',
        'data',
        'data->nombre',
        'data->logo',
        
    ];

    protected $casts = [
        'data' => 'array'
    ];
}
