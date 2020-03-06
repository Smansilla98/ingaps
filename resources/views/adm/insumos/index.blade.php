@extends('layouts.adm')
@section('content')
<br><br><br>
<h1 class='text-center'>
Ingreso de insumos
  </h1>
<div class="panel-body container">
  <div class="panel-body container">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Categorias</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                     <div class="modal-content">
                      <div class="modal-body"><h1 class='text-center'>Listado de categorias</h1>                        
                        
                       <div class="table-responsive container">
                        <table class="table">
                          
                         <thead>
                           
                           <tr>
                              <th scope="col">Nombre</th>
                              <th scope="col">Indique orden de aparicion</th>
                              <th scope="col">Icono</th>
                              <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Nuevo</button>
                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                    <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModal1Label">Nueva Categoria</h5>
                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                     <span aria-hidden="true">&times;</span>
                                                       </button>
                                                    </div>
                                                    <div class="modal-body">
                                                      <form id="form1" method="POST">
                                                        <div class="row">
                                            
                                                            <input type="hidden" id="id" name="id" class="form-control">
                                                          
                                                            <div class="form-group col-lg-12">
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
  
   
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Seccion">Seccion</button>
                <div class="modal fade" id="Seccion" tabindex="-1" role="dialog" aria-labelledby="Seccion" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                     <div class="modal-content">
                      <div class="modal-body"><h1 class='text-center'>Listado de Seccion</h1>                        
                        
                       <div class="table-responsive container">
                        <table class="table">
                          
                         <thead>
                           
                           <tr>
                              <th scope="col">Orden</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Logo</th>
                              <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevaSeccion">Nuevo</button>
                                <div class="modal fade" id="nuevaSeccion" tabindex="-1" role="dialog" aria-labelledby="nuevaSeccion" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                    <div class="modal-header">
                                     <h5 class="modal-title" id="nuevaSeccion">Nueva Seccion</h5>
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
                                          <label>Logo</label>
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
                           <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarmarca">Editar</button>
                            <div class="modal fade" id="editarmarca" tabindex="-1" role="dialog" aria-labelledby="editarmarca" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                <div class="modal-header">
                                 <h5 class="modal-title" id="editarmarca">Editar</h5>
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                                   </button>
                                                </div>
                                                <div class="modal-body">
                                                  <form id="form1" method="POST">
                                                    <div class="row">
                                        
                                                        <input type="hidden" id="id" name="id" class="form-control">
                                                      
                                                        <div class="form-group col-lg-12">
                                                            <label>Orden</label>
                                                            <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                                                        </div>
                                                        <div class="form-group col-lg-12">
                                                          <label>Nombre</label>
                                                          <input type="text" id="txtPrecio" name="txtPrecio" class="form-control">
                                                      </div>
                                                      <div class="form-group col-lg-12">
                                                          <label>Logo</label>
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
                      <label>Descripción</label>
                        <input type="textarea" id="txtStockMax" name="txtStockMax" class="form-control">
                    </div>
                      <div class="form-group col-lg-12">
                        <label>Elija Sección</label>
                          <select type="option" id="txtNombre" name="txtNombre" class="form-control">
                     </div>
                    </div>
                  </form>
                </div>
@endsection
    


