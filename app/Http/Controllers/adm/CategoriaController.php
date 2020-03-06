<?php

namespace App\Http\Controllers;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


class CategoriaController extends Controller
{
    public function index()
    {
        /* 
        Esta función se encarga de cargar la vista de categorias
        */
        $categorias = Categoria::orderBy('orden','ASC')->get();
        return view('categorias-nuevo')->with(compact('categorias'));
    }
    public function save(Request $request)
    {
    	/* 
		Esta función se encarga de guardar una categoria nueva
    	*/
    	//Validación de los campos
        $request->validate([
           
            ]);
            $validator = Validator::make($request->all(), [
                        'nombre' => 'required',
                        'icono' => 'required|max:5120|mimes:png,gif,bmp,jpg,jpeg',
                        'orden' => 'nullable|max:10',
                        ]);
        if ($validator->fails()) {
            return back()
            ->with('error', 'Error al validar los datos ingresados. Por favor, intente de nuevo.');
        }
        //Verifico que no exista una categoria con el mismo nombre, ya que causa problema con los slugs
        $categoria_check = Categoria::where('slug',Str::slug($request->nombre))->get();
        if(count($categoria_check) > 1){
        	return back()
            ->with('error', 'No pueden existir dos categorias con el mismo nombre. Por favor, intente de nuevo.');
        }
        //Guardar el archivo
        $image = $request->file('image')->store('public');
        $image = explode('/', $image);
        $image = end($image);
        //Guardado del registro en la db
        $registro = new Categoria;
        $registro->orden = $request->orden;
        $registro->nombre = strtoupper($request->nombre);
        $registro->slug = Str::slug($request->nombre);
        $registro->image = $image;
        if($registro->save()){
            return back()->with('success','Categoria '. $request->nombre . ' añadida.');
        } 
        else {
            return back()->with('error','Algo salió mal a la hora de añadir la categoria.');
        }
    }
}
