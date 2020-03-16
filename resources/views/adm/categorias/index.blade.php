@extends('layouts.adm')
@section('content')
<br><br><br>

<h1 class='text-center'>Listado de Categorias</h1>  
<h6 class='text-center'>Cantidad de categorias: {{count($categorias)}}</h6>

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
            <input required name="image" type="file" class="custom-file-input" id="customFileLang" lang="es">
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
    @if ($categorias->isEmpty())
<div>No hay Categorias</div>
@else
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
      @foreach ($categorias as $categoria)
      <tr>
        <td scope="row">{{$categoria->id}}</td>
        <td>{!! $categoria->orden!!}</td>
        <td>{!! $categoria->nombre!!}</td>
        <td>{!! $categoria->imagen !!}</td>      
        <td><button class="btn btn-warning text-white" data-toggle="modal" data-target="#ver{{$categoria->id}}">Editar</button>
          <div class="modal fade" id="ver{{$categoria->id}}" tabindex="-1" role="dialog" aria-labelledby="ver{{$categoria->id}}Label" aria-hidden="true">              <div class="modal-dialog" role="document">
               <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title" id="model2">Editar</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
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
                          <input required name="image" type="file" class="custom-file-input" id="customFileLang" lang="es">
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
          </div></td>
          <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#delete" >Eliminar</button>
                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" ñaria-hidden="true">
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
                    <button href="{{route('adm-categoria-destroy', ['id' => $categoria->id])}}" class="btn btn-danger text-white" onclick="return confirm('¿Estás seguro?')">Borrar</button>
	     

               </div>
              </div>
              </div>
          </div></td>      </tr>
      @endforeach
      
    </tbody>
  </table> 
  </div>
  @endif
@endsection