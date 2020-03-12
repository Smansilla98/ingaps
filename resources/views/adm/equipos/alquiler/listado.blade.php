
<br><br><br>
@extends('layouts.adm')
@section('content')
<div class="panel-body container">

<h1 class='text-center'>
Listado de Equipos para Alquiler</h1>

<div class="table-responsive container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Producto</th>
        <th scope="col">Ficha(Ver)</th>
        <th scope="col">Imagen(Ver)</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Categoria</th>
        <th scope="col">Año</th>
        <th scope="col">Modelo</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($equipos as $equipo)
      <tr>
        <th scope="row">{{$equipo->id}}</th>
        <td>{{$equipo->data['producto']}}</td>
        <td>{{$equipo->data['ficha']}}</td>
        <td>{{$equipo->data['imagen']}}</td>
        <td>{{$equipo->data['descripcion']}}</td>
        <td>{{$equipo->data['año']}}</td>
        <td>{{$equipo->data['categoria']}}</td>
        <td>{{$equipo->data['modelo']}}</td>
      @endforeach

        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Editar</button>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                   <div class="modal-content">
                    <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                         </button>
                      </div>
                      <div class="modal-body">
                        <form id="form1" method="POST">
                          <div class="row">
                            <input type="hidden" id="id" name="id" class="form-control">
                              <div class="form-group col-lg-12">
                                <label>Producto:</label>
                                 <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                              </div>
                          <div class="form-group col-lg-12">
                                <label>Ficha</label>
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
                              <input type="text" id="txtStockMax" name="txtStockMax" class="form-control">
                          </div>
                          <div class="form-group col-lg-6">
                            <label>Seleccione Categoria<select type="select" id=""name="" value=""></label>
                          </div>
                          <div class="form-group col-lg-12">
                            <label>Seleccione Marca</label>
                              <select type="option" id="txtNombre" name="txtNombre" class="form-control">
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
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
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
@endsection

@section('javascript')

@endsection