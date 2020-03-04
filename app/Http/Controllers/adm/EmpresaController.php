<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Empresa;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class EmpresaController extends Controller
{

    public function index()
    {
    
    /*funcion para creacion de regristro de datos manual */
    $empresas = Empresa::where('orden', 'empresas')->first();
    if(!$empresas){
        $empresa= new Empresa;
        $empresa->orden = 'empresas';
        $empresa->data= null;
        $empresa->save();
        $empresas = Empresa::where('orden', 'empresas')->first();
            }
        return view('adm.empresa.index')->with(compact('empresas'));
    }


    public function save(Request $request)
    {
        $requestData = $request->all();
        $request->validate([
           
            ]);
            $validator = Validator::make($request->all(), [
                        'titulo'    => 'required|max:120',
                        'direccion' => 'required|max:120',
                        'horario' => 'required|max:120',
                        'ubicacion' => 'required',
                        'telefono' => 'required|max:120',
                        'email' => 'required|email|max:120',
                        'emailContacto' => 'nullable|email|max:120',
                        'emailCotizacion' => 'nullable|email|max:120',
                        ]);
            if ($validator->fails()) {
                return redirect()->route('datos-save')
                ->with('error', 'Error al validar los datos ingresados. Por favor, intente de nuevo.');
            }
        
        unset($requestData['_token']);
        
        $empresa = Empresa::where('orden', 'empresas')->first();
        /*dd($empresa);*/
        if( !empty( $empresa ) ) {
            $empresa->data = $requestData;
            $empresa->save();
        } else
            $empresa = Empresa::create([ "orden" => "empresas" , "data" => $requestData ] );
        

        if($empresa) {
            return redirect()->route('datos-save')
            ->with('success', 'Datos actualizados correctamente.');
        }else {
            return redirect()->route('datos-save')
            ->with('error', 'Error al actualizar los datos. Por favor, intente de nuevo.');
        }
    }

}
