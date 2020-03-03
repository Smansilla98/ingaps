<?php

namespace App\Http\Controllers\adm;

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
        return view('adm.equipos.alquiler.listado');
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
