<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $table  ="mensajes";
    
    protected $fillable = [
        'section',
        'data,'
    ];
    
    protected $casts=[
        'data' => 'array'
    ];
    
}
