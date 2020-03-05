<?php

namespace App\Http\Controllers\adm;
use App\Consulta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConsultaController extends Controller
{  
    public function index()
    {
    $consultas = Consulta::where('orden', 'consultas');
    return view('adm.consultas.index')->with(compact('consultas'));  
}
}
