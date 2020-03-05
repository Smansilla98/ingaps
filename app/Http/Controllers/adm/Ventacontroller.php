<?php

namespace App\Http\Controllers\adm;
use App\Equipo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Ventacontroller extends Controller
{ 
    public function index()
    {
        return view('adm.equipos.venta.index');
    }
    public function listado()
    {
        $equipos = Equipo::where('orden', 'equipos');
        
    
        return view('adm.equipos.venta.listado')->with(compact('equipos')); 

    }
    public function eliminar()
    {
        return view('adm.equipos.venta.eliminar');
    }
     public function editar()
    {
    return view('adm.equipos.venta.editar');
    }
}
