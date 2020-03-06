@extends('layouts.adm')
@section('content')
<br><br><br>
<h1 class='text-center'>
Ingreso de equipos para alquiler
 </h1>

 <!--Categorias --> 
<div class="panel-body container">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categorias">Categorias</button>
              <div class="modal fade" id="categorias" tabindex="-1" role="dialog" aria-labelledby="categorias
              " aria-hidden="true">
                  <div class="modal-dialog" role="document">
                   <div class="modal-content">
                    <div class="modal-body"><h1 class='text-center'>Listado de categorias </h1>                        
                      
                     <div class="table-responsive container">
                      <table class="table">                        
                       <thead>                         
                         <tr>
                            <th scope="col">Orden</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Icono</th>
                            <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevaCategoria">Nuevo</button>
                              <div class="modal fade" id="nuevaCategoria" tabindex="-1" role="dialog" aria-labelledby="nuevaCategoria" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                  <div class="modal-header">
                                   <h5 class="modal-title" id="nuevaCategoria">Nueva Categoria</h5>
                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                                     </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <form  action="" id="nuevaCategoria" method="post" enctype="multipart/form-data">
                                                      @csrf
                                                      <div class="row">
                                          
                                                          <input type="hidden" id="id" name="id" class="form-control">
                                                        
                                                          <div class="form-group col-lg-12">
                                                              <label>Orden:</label>
                                                              <input type="text" id="orden" name="txtNombre" class="form-control">
                                                          </div>
                                                          <div class="form-group col-lg-12">
                                                            <label>Nombre</label>
                                                            <input type="text" id="nobmre" name="txtPrecio" class="form-control">
                                                        </div>
                                                        <div class="form-group col-lg-12">
                                                            <label>Icono</label>
                                                            <input type="file" id="icono" name="txtFechaAlta" class="form-control" >
                                                        </div>                                                     
                                                      </div></form>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    <button method="post" type="submit" class="btn btn-primary">Guardar Cambios</button>
                                               </div>
                                              </div>
                                              </div>
                                          </div></th>
                         </tr>
                       </thead>
                       <tbody>
                         <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Editar</button>
                          <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                             <div class="modal-content">
                              <div class="modal-header">
                               <h5 class="modal-title" id="exampleModal2Label">Editar</h5>
                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                                 </button>
                                              </div>
                                              <div class="modal-body">
                                                <form id="form1" method="POST">
                                                  <div class="row">
                                      
                                                      <input type="hidden" id="id" name="id" class="form-control">
                                                    
                                                      <div class="form-group col-lg-12">
                                                          <label>Orden:</label>
                                                          <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-12">
                                                        <label>Nombre:</label>
                                                        <input type="text" id="txtPrecio" name="txtPrecio" class="form-control">
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <label>Icono</label>
                                                        <input type="file" id="txtFechaAlta" name="txtFechaAlta" class="form-control" >
                                                    </div>
                                                  </div></form>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary">Guardar Cambios</button>
                                           </div>
                                          </div>
                                          </div>
                                      </div></td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSm">Eliminar</button>
                                  <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" ñaria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                     <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-" id="model1">Eliminar</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                            </button>
                                       </div>
                                       <div class="modal-body">
                                          ¿Usted desea eliminar el registro?
                                       </div>
                                       <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                        <button type="button" class="btn btn-primary">Si</button>
                                           </div>
                                          </div>
                                          </div>
                                      </div></td>
                                    </tr>
                              </tbody>
                          </table>
                        </div>
                        
                      
                      </div>
                  </div>
                  </div>
              </div>
<!--Marcas-->
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#marcas">Marcas</button>
              <div class="modal fade" id="marcas" tabindex="-1" role="dialog" aria-labelledby="marcas" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                   <div class="modal-content">
                    <div class="modal-body"><h1 class='text-center'>Listado de Marcas</h1>                        
                      
                     <div class="table-responsive container">
                      <table class="table">
                        
                       <thead>
                         
                         <tr>
                            <th scope="col">Orden</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Icono</th>
                            <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevaMarca">Nuevo</button>
                              <div class="modal fade" id="nuevaMarca" tabindex="-1" role="dialog" aria-labelledby="nuevaMarca" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                  <div class="modal-header">
                                   <h5 class="modal-title" id="nuevaMarca">Nueva Marca</h5>
                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                                     </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <form id="form1" method="POST">
                                                      <div class="row">
                                                          <input type="hidden" id="id" name="id" class="form-control">
                                                          <div class="form-group col-lg-12">
                                                              <label>Orden:</label>
                                                              <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                                                          </div>
                                                          <div class="form-group col-lg-12">
                                                            <label>Nombre</label>
                                                            <input type="text" id="txtPrecio" name="txtPrecio" class="form-control">
                                                        </div>
                                                        <div class="form-group col-lg-12">
                                                            <label>Icono</label>
                                                            <input type="file" id="txtFechaAlta" name="txtFechaAlta" class="form-control" >
                                                        </div>                                                     
                                                      </div></form>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                                               </div>
                                              </div>
                                              </div>
                                          </div></th>
                         </tr>
                       </thead>
                       <tbody>
                         <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarMarca">Editar</button>
                          <div class="modal fade" id="editarMarca" tabindex="-1" role="dialog" aria-labelledby="editarMarca" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                             <div class="modal-content">
                              <div class="modal-header">
                               <h5 class="modal-title" id="editarMarca">Editar</h5>
                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                                 </button>
                                              </div>
                                              <div class="modal-body">
                                                <form id="form1" method="POST">
                                                  <div class="row">
                                      
                                                      <input type="hidden" id="id" name="id" class="form-control">
                                                    
                                                      <div class="form-group col-lg-12">
                                                          <label>Orden:</label>
                                                          <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-12">
                                                        <label>Nombre:</label>
                                                        <input type="text" id="txtPrecio" name="txtPrecio" class="form-control">
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <label>Icono</label>
                                                        <input type="file" id="txtFechaAlta" name="txtFechaAlta" class="form-control" >
                                                    </div>
                                                  </div></form>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary">Guardar Cambios</button>
                                           </div>
                                          </div>
                                          </div>
                                      </div></td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#eliminarMarca">Eliminar</button>
                                  <div class="modal fade" id="eliminarMarca" tabindex="-1" role="dialog" aria-labelledby="eliminarMarca" ñaria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                     <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-" id="eliminarMarca">Eliminar</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                            </button>
                                       </div>
                                       <div class="modal-body">
                                          ¿Usted desea eliminar el registro?
                                       </div>
                                       <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                        <button type="button" class="btn btn-primary">Si</button>
                                           </div>
                                          </div>
                                          </div>
                                      </div></td>
                                    </tr>
                              </tbody>
                          </table>
                        </div>
                        
                      
                      </div>
                  </div>
                  </div>
              </div>

<!--
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"></button>
                              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModelCenter">Nueva Marca</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <form action="" method="post" enctype="multipart/form-data">
                                          @csrf
                                            <label>Orden:</label>
                                              <input type="text" id="nombreMarca" class="form-control">
                                                <small>Indique orden de aparicion</small><br>
                                            <label>Nombre:</label>
                                              <input type="text" id="nombreMarca" class="form-control">
                                                <small>El nombre debe ser unico</small><br>
                                            <label>Logo:</label>
                                              <input type="file" id="nombreMarca" class="form-control">
                                                <small>Ingrese Logo para Marca</small><br>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary"> Guardar Cambios</button>
                                    </div>
                                  </form>
                                  </div>
                                </div>
                            </div>    -->         
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Guardar</button>
                <div id = "msg"></div>
                  <br><form id="form1" method="POST">
                    <div class="form-group col-lg-12 row">                
                      <div class="form-group col-lg-12">
                        <label>Seleccione Categoria</label>
                          <select type="text" id="categoria" name="categoria" class="form-control">
                      </div>
                    <div class="form-group col-lg-12">
                      <input type="hidden" id="id" name="id" class="form-control">
                        <label>Nombre del producto:</label>
                      <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                    </div>
                    <div class="form-group col-lg-12">
                      <label>Ficha tecnica</label>
                        <input type="file" id="txtPrecio" name="txtPrecio" class="form-control">
                    </div>
                    <div class="form-group col-lg-12">
                      <label>Imagen</label>
                        <input type="file" id="txtFechaAlta" name="txtFechaAlta" class="form-control" >
                    </div>
                    <div class="form-group col-lg-12">
                      <label>Descripcion</label>
                        <input type="textarea" id="txtStockMax" name="txtStockMax" class="form-control">
                    </div>
                    <div class="form-group col-lg-12">
                      <label>Año</label>
                        <input type="textarea" id="txtStockMax" name="txtStockMax" class="form-control">
                    </div>
                      <div class="form-group col-lg-12">
                        <label>Seleccione Marca</label>
                          <select type="option" id="txtNombre" name="txtNombre" class="form-control">
                     </div>
                    </div>
                  </form>
                </div>
@endsection
    



