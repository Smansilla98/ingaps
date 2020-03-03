<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CotizacionController extends Controller
{
    public function index()
    {
        return view('adm.cotizaciones.index');
    }
}
