<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empresa;

class EmpresaController extends Controller
{
    public function index()
    {

    $empresas = Empresa::where('orden', 'empresas')->first();
    if(!$empresas){
        $empresa= new Empresa;
        $empresa->orden = 'empresas';
        $empresa->data= null;
        $empresa->save();
        $empresas = Empresa::where('orden', 'empresas')->first();
            }
        return view('adm.empresa.index')->with(compact('datos'));
    }
}
