<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;


class PageController extends Controller
{
    public function home()
    { return view('page.home');
     
        
        /*$portadas = Image::where('section','home_portada')->orderBy('orden','ASC')->get();
        $categorias = Categoria::orderBy('orden','ASC')->get();
        $textos = Dato::where('section','textos')->first();
        $destacados = Producto::where('data->estado','destacado')->orderBy('orden','ASC')->take(4)->get();
        $imagen_banner_inferior = Image::where('section','banner_inferior')->orderBy('orden','ASC')->first();
        return view('page.home')->with( compact('portadas', 'categorias','textos','destacados','imagen_banner_inferior') );*/
    }

    public function empresa()
    { return view('page.empresa');
        /*$textos = Dato::where('section','textos')->first();
        $portada = Image::where('section','empresa_portada')->orderBy('orden','ASC')->first();
        $imagen = Image::where('section','empresa_imagen')->orderBy('orden','ASC')->first();
        return view('page.empresa')->with( compact('textos','imagen','portada') );*/
    }
        public function ingenieria()
    { return view('page.ingenieria');
    }
    public function contacto()
    { return view('page.contacto');
    }

    public function insumos()
        { return view('page.insumos');
    

    /*public function categorias()
    {
        //  Muestra todas las categorias
        $portada = Image::where('section','productos')->orderBy('orden','ASC')->first();
        $categorias = Categoria::orderBy('orden','ASC')->get();
        $imagen_banner_inferior = Image::where('section','banner_inferior')->orderBy('orden','ASC')->first();
        $textos = Dato::where('section','textos')->first();
        return view('page.categorias')->with( compact('portada','categorias','imagen_banner_inferior','textos') );
    }

    public function subcategorias($slug_familia)
    {
        //  Subcategorias de una familia actual (la familia del $slug_familia)
        $portada = Image::where('section','productos')->orderBy('orden','ASC')->first();
        $categorias = Categoria::orderBy('orden','ASC')->get();
        
        $categoria_actual = Categoria::where('slug',$slug_familia)->first();
        if(!$categoria_actual) 
            return redirect()->route('productos')->with('error','La categoria no existe.');

        return view('page.subcategorias')->with( compact('portada','categorias','categoria_actual') );
    }

    public function productos($slug_familia, $id_subcategoria)
    {
        //  Carga todos los productos de la subcategoria
        $portada = Image::where('section','productos')->orderBy('orden','ASC')->first();
        $categorias = Categoria::orderBy('orden','ASC')->get();
        
        $categoria_actual = Categoria::where('slug',$slug_familia)->first();
        $subcategoria_actual = Subcategoria::where('id',$id_subcategoria)->first();
        if(!$categoria_actual or !$subcategoria_actual) 
            return redirect()->route('productos')->with('error','La categoria no existe.');
        return view('page.productos')->with( compact('portada','categorias','categoria_actual','subcategoria_actual') );
    }

    public function producto_individual($slug_familia, $id_subcategoria, $id_producto)
    {
        //  Carga la vista de un producto individual
        $portada = Image::where('section','productos')->orderBy('orden','ASC')->first();
        $categorias = Categoria::orderBy('orden','ASC')->get();

        $categoria_actual = Categoria::where('slug',$slug_familia)->first();
        $subcategoria_actual = Subcategoria::where('id',$id_subcategoria)->first();
        $producto = Producto::where('id',$id_producto)->first();
        $relacionados = Producto::where('id','!=',$producto->id)->orderByRaw('RAND()')->take(3)->get();

        if(!$categoria_actual or !$subcategoria_actual or !$producto) 
            return redirect()->route('productos')->with('error','La categoria no existe.');

        return view('page.producto_individual')->with( compact('portada','categorias','categoria_actual','subcategoria_actual','producto','relacionados') );
    }

    public function faq()
    {
        $portada = Image::where('section','cabecera')->orderBy('orden','ASC')->first();
        $faqs = Faq::orderBy('orden','ASC')->get();
        $imagen_banner_inferior = Image::where('section','banner_inferior')->orderBy('orden','ASC')->first();
        $textos = Dato::where('section','textos')->first();
        return view('page.faq')->with( compact('faqs','portada','imagen_banner_inferior','textos') );
    }

    public function presupuesto()
    {
        $portada = Image::where('section','cabecera')->orderBy('orden','ASC')->first();
        return view('page.presupuesto')->with(['captcha_public_key' => $this->captcha_public_key])->with(compact('portada'));
    }

    public function contacto() 
    {
        return view('page.contacto')->with(['captcha_public_key' => $this->captcha_public_key]);
    }

    public function buscador(Request $request)
    {
        /*
        Función del buscador. Si llega algo en la variable "q" busca.
        
        if(isset($request->q)){    
            $query_raw = $request->q;
            $query = strtolower($query_raw);    //Para que las mayúsculas no jodan
            $query = explode(' ',$query);   //Separo toda la búsqueda por espacios
            //Limpio el query de elementos de longitud 1
            $longitud = sizeof($query);
            for ($i=0; $i < $longitud; $i++) { 
                if(strlen($query[$i]) == 1) 
                    unset($query[$i]);
            }
            if(sizeof($query) == 0) {
                $resultados = [];   //El usuario mandó una sola letra para buscar, lo cual no tiene sentido.
            }
            else {
                $resultados = Producto::where('data->slug', 'like', '%'.$query[0].'%');
            
                foreach($query as $word)
                {
                    if(strlen($word) == 1) {
                        continue;
                    }
                    $resultados->orWhere("data->slug",'like','%'.$word.'%')->orWhere('data->descripcion', 'like', '%'.$word.'%');
                }
                $resultados = $resultados->orderBy('orden','ASC')->limit(16)->get();   //resultado final de la consulta 
            }
            if(count($resultados) == 0){    //En caso de que la búsqueda no arroje resultados, me traigo tres productos al azar y se los "ofrezco" al usuario
                $consuelos = Producto::inRandomOrder()->limit(4)->get();
            }
            else {
                $consuelos = null;
            }
            return view('page.buscar')->with(compact('resultados', 'query_raw','consuelos'));
        } 
        else {
            return view('page.buscar');
        }
    }
    
}
*/
}}