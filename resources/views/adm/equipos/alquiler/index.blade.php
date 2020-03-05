@extends('layouts.adm')
@section('content')
<br><br><br>
<h1 class='text-center'>
Ingreso de equipos para alquiler
  </h1>
<div class="panel-body container">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">+ Nueva Categoria</button>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                   <div class="modal-content">
                    <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Nueva Categoria</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                         </button>
                      </div>
                      <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <label>Orden:</label>
                        <input type="text" id="nombreCategoria" class="form-control">
                        <small>Indique orden de aparicion</small><br>
                        <label>Nombre:</label>
                        <input type="text" id="nombreCategoria" class="form-control">
                        <small>El nombre debe ser unico</small><br>
                        <label>Icono:</label>
                        <input type="file" id="nombreCategoria" class="form-control">
                        <small>Ingrese icono para categoria</small><br>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary"> Guardar Cambios</button>
                        </form>
                      </div>
                  </div>
                  </div>
              </div>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSm">+ Nueva Marca</button>
              <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="centralModalSmLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                   <div class="modal-content">
                    <div class="modal-header">
                       <h5 class="modal-title" id="centralModalSmLabel">Nueva Marca</h5>
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
                        </form>
                      </div>
                  </div>
                  </div>
              </div>              
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Guardar</button>
        <div id = "msg"></div>
     
        <br><form id="form1" method="POST">
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
            <div class="form-group col-lg-6">
              <label>Seleccione Categoria<select type="select" id=""name="" value=""></label>
            </div>
            <div class="form-group col-lg-6">
              <label>Seleccione Modelo<select type="select" id=""name="" value=""></label>
            </div>
                 
            </div></form>
    </div>
    
    @endsection
