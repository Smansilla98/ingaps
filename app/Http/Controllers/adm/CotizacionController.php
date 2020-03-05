<?php

namespace App\Http\Controllers\adm;
use App\Cotizacion;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CotizacionController extends Controller
{
    public function index()
    { {
        $cotizaciones = Cotizacion::where('orden', 'cotizaciones');
        return view('adm.cotizaciones.index')->with(compact('cotizaciones'));  
    }
}

}
