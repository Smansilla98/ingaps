<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    protected $table  ="cotizaciones";
    
    protected $fillable = [
        'section',
        'data,'
    ];
    
    protected $casts=[
        'data' => 'array'
    ];
}
