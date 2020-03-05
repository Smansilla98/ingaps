<?php

namespace App\Http\Controllers\adm;
use App\Mensaje;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class MensajeController extends Controller
{
    public function index()
        {
        $mensajes = Mensaje::where('orden', 'mensajes');
        return view('adm.mensajes.index')->with(compact('mensajes'));  
    }
}