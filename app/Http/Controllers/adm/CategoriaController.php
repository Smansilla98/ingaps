<?php

namespace App\Http\Controllers\adm;
use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class CategoriaController extends Controller
{  
    public function index()
    {
          /*funcion para creacion de regristro de datos manual */
    $categorias = Categoria::where('orden', 'categorias')->first();
    
        return view('adm.categorias.index')->with(compact('categorias'));
    }

    public function save(Request $request)
    {
        $requestData = $request->all();
        $request->validate([]);
        $categoria = new Categoria;
        $categoria->orden = 'categorias';
        $categoria->data=null;
       
        return view('adm.categorias.index')->with(compact('categorias'));

    }
    }