<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{   //Modelo enlazado a la tabla
    protected $table ="equipos";
    //listado de items
    protected $fillable =[
        'id',
        'orden',
        'data',
        'data->nombre',
        'data->modelo',
        'data->descripcion',
        
    ];

    protected $casts = [
        'data' => 'array'
    ];
    public function categoria()
    {
        //dd($this->subcategoria->categoria);
        //return $this->hasOneThrough('App\Subcategoria', 'App\Categoria','id_subcategoria','id_categoria');
        return $this->categoria;
    }


}


