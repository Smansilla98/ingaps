@extends('layouts.adm')
@section('content')
<br><br><br>

<h1 class='text-center'>Listado de Categorias</h1>

<div class="panel-body container">
  <button class="btn btn-primary" data-toggle="modal" data-target="#nuevaCategoria"  >Nueva categoria</button>
   <div class="modal fade" id="nuevaCategoria" tabindex="-1" role="dialog" aria-labelledby="nuevaCategoriaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="nuevaCategoriaLabel">Nueva categoria</h5>
            <button type="button" class="close" data-dismiss="modal"aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
    </div>
    <div class="modal-body">
        <form action="{{route('adm-categorias')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Orden</label>
            <input name="orden" type="text" class="form-control" placeholder="Orden de aparición">
        </div><hr>
        <div class="form-group">
            <label>Nombre</label>
            <input name="nombre" type="text" class="form-control" placeholder="Nombre de la categoria">
        </div><hr>
        <div class="custom-file">
            <input required name="icono" type="file" class="custom-file-input" id="customFileLang" lang="es">
            <label class="custom-file-label" for="customFileLang">Icono</label>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
    </div>
</div>
</div>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th class="th-lg">Orden</th>
          <th class="th-lg">Nombre</th>
          <th class="th-lg">Imagen</th>

        </tr>
      </thead>
      <tbody>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>

    </table> 
    
  </div>

@endsection
    



