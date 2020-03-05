<?php

namespace App\Http\Controllers\adm;
use App\Equipo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlquilerController extends Controller
{
    public function index()
    {
        return view('adm.equipos.alquiler.index');
    }
    public function listado()
    {
        $equipos = Equipo::where('orden', 'equipos');
        
    
        return view('adm.equipos.alquiler.listado')->with(compact('equipos')); 

    }
    public function eliminar()
    {
        return view('adm.equipos.alquiler.eliminar');
    }
     public function editar()
    {
    return view('adm.equipos.alquiler.editar');
    }
}
