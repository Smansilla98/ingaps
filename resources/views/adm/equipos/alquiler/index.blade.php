@extends('layouts.adm')
@section('content')
<br><br><br>
<div class="panel-body container">

<h1 class='text-center'>Ingreso de equipos para alquiler</h1>


<div class="text-left">

  <button type="button" class="btn btn-primary" data-dismiss="modal">Guardar</button>
</div> 
  <div id = "msg"></div><br>
  <form action="" id="form1" method="POST">
    @csrf
    <div class="form-group col-lg-12">
      <div class="form-group col-lg-12">
        <label>Seleccione Categoria</label>
        <select name="" name="" class="form-control" >
          <option value="">Seleccione una</option>
          
            <option></option>
      </div>
      <div class="form-group col-lg-12">
        <input type="hidden" id="id" name="id" class="form-control">
        <label>Nombre del producto:</label>
        <input type="text" id="" name="" class="form-control">
      </div>
      <div class="form-group col-lg-12">
        <label>Ficha tecnica</label>
        <input type="file" id="txtPrecio" name="txtPrecio" class="form-control">
      </div>
      <div class="form-group col-lg-12">
        <label>Imagen</label>
        <input type="file" id="" name="" class="form-control" >
      </div>
      <div class="form-group col-lg-12">
        <label>Descripcion</label>
        <input type="textarea" id="" name="" class="form-control">
      </div>
      <div class="form-group col-lg-12">
        <label>Año</label>
        <input type="textarea" id="" name="" class="form-control">
      </div>
      <div class="form-group col-lg-12">
        <label>Seleccione Marca</label>
        <select type="option" id="" name="" class="form-control">

        </div>
     
      </div>
    </form>
  </div>
</div>
@endsection

@section('javascript')

@endsection
