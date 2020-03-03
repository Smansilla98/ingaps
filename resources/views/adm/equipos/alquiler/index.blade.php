@extends('layouts.adm')
@section('content')
<br><br><br>
<h1 class='text-center'>
Ingreso de equipos para alquiler
  </h1>
<div class="panel-body container-fluid">
 
        <div id = "msg"></div>
     
        <form id="form1" method="POST">
            <div class="row">
                <input type="hidden" name="_token" ></input>
                <input type="hidden" id="id" name="id" class="form-control">
                <div class="form-group col-lg-6">
                    <label>Nombre del producto:</label>
                    <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                </div>
                <div class="form-group col-lg-6">
                    <label>Descripcion</label>
                    <input type="number" id="txtCodBarra" name="txtCodBarra" class="form-control">
                </div>
                <div class="form-group col-lg-6">
                    <label>Ficha tecnica</label>
                    <input type="text" id="txtPrecio" name="txtPrecio" class="form-control">
                </div>
                <div class="form-group col-lg-6">
                    <label>Imagen</label>
                    <input type="insert" id="txtFechaAlta" name="txtFechaAlta" class="form-control" >
                </div>
                <div class="form-group col-lg-6">
                    <label>Categoria</label>
                    <input type="number" id="txtStock" name="txtStock" class="form-control" >
                </div>
                <div class="form-group col-lg-6">
                    <label>Modelo</label>
                    <input type="number" id="txtStockMin" name="txtStockMin" class="form-control">
                </div>
                <div class="form-group col-lg-6">
                    <label>Descripcion</label>
                    <input type="number" id="txtStockMax" name="txtStockMax" class="form-control">
                </div>
               
                 
            </div>
			<div class="card mb-3">
				<div class="card-header">
					<i class="fa fa-users fa-fw"></i>  Categoría de Producto
				</div>
                
				<div class="card-body">
		            <div class="row">         
		    	        
		                <div class="form-group col-lg-12">
		                    <label><input type="checkbox" id=""
                             name="" value="" class="chk-control" />
		                    </label>
		            	</div>
		                
		            </div>
				</div>
			</div>
            </div>
        </form>
</div>
<div class="modal fade" id="mdlEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar registro?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">¿Deseas eliminar el registro actual?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
            <button type="button" class="btn btn-primary" onclick="eliminar();">Sí</button>
          </div>
        </div>
      </div>
    </div>@endsection