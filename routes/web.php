<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return view('welcome');
});

*/
Auth::routes([ 
    'register' => false,
    'verify' => false,
    'reset' => false 
    ]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/adm', 'adm\AdmController@index')->name('adm');
Route::post('/adm', 'adm\AdmController@index')->name('adm');

//* Ruta de datos de la empresa//
Route::get('/adm/empresa', 'adm\EmpresaController@index')->name('datos-index');
Route::post('/adm/empresa', 'adm\EmpresaController@index')->name('datos-index');
Route::post('/adm/empresa', 'adm\EmpresaController@save')->name('datos-save');

//* Ruta de consultas via web//
Route::get('/adm/consultas', 'adm\ConsultaController@index');

//* Ruta de mensajes via web//
Route::get('/adm/mensajes', 'adm\MensajeController@index')->name('mensajes');
//* Ruta de cotizaciones solicitadas via web//
Route::get('/adm/cotizaciones', 'adm\CotizacionController@index');

//*EQUIPOS //
//* Equipos de Venta - CRUD//
//Ingreso de equipo Nuevo//
Route::get('/adm/equipos/venta/nuevo', 'adm\VentaController@index')->name('adm-equipos-nuevo');
Route::get('/adm/equipos/venta/editar', 'adm\VentaController@editar');
Route::get('/adm/equipos/venta/eliminar', 'adm\VentaController@eliminar');
//listado de equipos de venta//
Route::get('/adm/equipos/venta/listado', 'adm\VentaController@listado');
//* Categorias Nuevas - CRUD//

//* Equipos de Alquiler - CRUD//
Route::get('/adm/equipos/alquiler/nuevo', 'adm\AlquilerController@index')->name('adm-equipos-alquiler');
Route::get('/adm/equipos/alquiler/editar', 'adm\AlquilerController@editar');
Route::get('/adm/equipos/alquiler/eliminar', 'adm\AlquilerController@eliminar');
//listado de equipos de Alquler//
Route::get('/adm/equipos/alquiler/listado', 'adm\AlquilerController@listado');
//* Insumos - CRUD//
Route::get('/adm/insumos/nuevo', 'adm\InsumoController@index');
Route::post('/adm/insumos/nuevo', 'adm\InsumoController@save')->name('insumo-nuevo');
Route::get('/adm/insumos/editar', 'adm\InsumoController@editar');
Route::get('/adm/insumos/eliminar', 'adm\InsumoController@eliminar');
Route::get('/adm/insumos/listado', 'adm\InsumoController@listado');

//Categorias
Route::get('adm/categorias/{id}','CategoriaController@destroy');
Route::resource('adm/categorias','CategoriaController');
Route::get('adm/categorias/{id}','CategoriaController@edit');
Route::post('adm/categorias/{id}','CategoriaController@edit');


Route::get('/adm/categorias', 'adm\CategoriaController@index')->name('adm-categorias');
Route::get('/adm/categorias/destroy/{id}', 'adm\CategoriaController@destroy')->name('adm-categoria-destroy');


Route::put('/adm/categorias','CategoriaController@put')-> name('categoria.put');
Route::get('/adm/categorias/save', 'adm\CategoriaController@store')->name('adm-categoria');
Route::post('/adm/categorias', 'adm\CategoriaController@store')->name('adm-categoria');
Route::post('/adm/categoria/update', 'adm\CategoriaController@update')->name('adm-categoria-update');
//Route::get('/adm/categoria/destroy/{slug}', 'adm\CategoriaController@destroy')->name('adm-categoria-destroy');
