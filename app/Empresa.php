<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{ //Modelo enlazado a la tabla
    protected $table ='empresas';
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