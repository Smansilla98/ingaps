@extends('layouts.adm')
@section('content')


<form class="text-right border border-light p-5" action="#!"method="post">
    <h3  class="text-center">Datos de la empresa</h3>


        <small>Titulo</small>
<input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Nombre de la empresa">
<small>Direccion</small>
<input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Direccion">
<small>Dias y horarios de atención al público</small>
<input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="">
<small>Ubicación Google</small>
<input type="number" id="defaultContactFormName" class="form-control mb-4" placeholder="URL maps">
<small>Telefono</small>
<input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Telefono">
<small>Correo Público</small>
<input type="mail" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">
<small>Correo de contacto</small>
<input type="mail" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">
<small>Correo de cotizaciones</small>
<input type="mail" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">
<h4>Redes Sociales</h4>
<small>Facebook</small>
<input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="">
<small>Instagram</small>
<input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="">

<button class="btn btn-info btn-block" type="submit">Actualizar</button>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</form>
@endsection

@section('javascript')

@endsection

