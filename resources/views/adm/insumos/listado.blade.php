
<br><br><br>
@extends('layouts.adm')
@section('content')
<h1 class='text-center'>
Listado de Insumo</h1>

<div class="table-responsive container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Insumo</th>
        <th scope="col">Ficha(Ver)</th>
        <th scope="col">Imagen(Ver)</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Categoria</th>
        <th scope="col">Seccion</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Editar</button>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                   <div class="modal-content">
                    <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                         </button>
                      </div>
                      <div class="modal-body">
                      ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                   </div>
                  </div>
                  </div>
              </div></td>
        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Eliminar</button>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                   <div class="modal-content">
                    <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                         </button>
                      </div>
                      <div class="modal-body">
                      ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                   </div>
                  </div>
                  </div>
              </div></td>
      </tr>
      
    </tbody>
  </table>
</div>
@endsection

@section('javascript')

@endsection