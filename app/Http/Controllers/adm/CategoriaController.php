<?php

namespace App\Http\Controllers\adm;
use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
  

class CategoriaController extends Controller
{ 
    public function index()
    {    $categorias = Categoria::all();
        //return view('mensajes.index', compact('mensajes'));
        return view('/adm/categorias/index')->with('categorias',$categorias);
    }

    public function create(Request $request)
    {
        return view('categorias.create');
    }
    public function store(Request $request)
    {
           $request->validate([
            'nombre' => 'required',
            'image' => 'required|max:5120|mimes:png,gif,bmp,jpg,jpeg',
            'orden' => 'nullable|max:10',
            ]);
            Categoria::create($request->all());
            
            return redirect('/adm/categorias/');
        }
        
        public function show(Categoria $categoria){
            return view('categorias.show',compact('categoria'));
        }

        public function edit(Categoria $categoria){
            $categorias = Categoria::find($id);

            // show the edit form and pass the nerd
            return View::make('categorias.edit')
                ->with('categoria', $categoria);
        }
        public function update(Request $request, Categoria $categoria){
            $request->validate([
                'id' => 'required',
                'nombre' => 'required',
                'image' => 'nullable|max:5120',
                'orden' => 'nullable|max:10',                           
            ]);
                $categoria->update($request->all());
                return redirect()->route('categorias.create')->with('sucess','categoria subida');
        }
        public function destroy($categoria)
        {     /* 
            Esta función se encarga de eliminar una categoria
            */$categoria = Categoria::where('categoria',$categorias);       
        $categoria->delete();
        return redirect('/adm/categorias/');
    }
        }
    


