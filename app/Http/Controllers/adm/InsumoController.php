<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InsumoController extends Controller
{
    public function index()
    {
        return view('adm.insumos.index');
    }
    public function save()
    {
        return view('insumo-nuevo');
    }
    public function listado()
    {
        return view('adm.insumos.listado');
    }
    public function eliminar()
    {
        return view('adm.insumos.eliminar');
    }
     public function editar()
    {
    return view('adm.insumos.editar');
    }
}
