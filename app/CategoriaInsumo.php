<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaInsumo extends Model
{//Modelo enlazado a la tabla
    protected $table ="categoria_insumos";
    //listado de items
    protected $fillable =[
        'id',
        'orden',
        'data',
        'data->nombre',
       
    ];

    protected $casts = [
        'data' => 'array'
    ];
}
