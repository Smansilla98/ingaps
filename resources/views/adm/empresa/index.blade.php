@extends('layouts.adm')
@section('content')


<form class=" border border-light p-5" action="#!"method="post">
    <h2  class="text-center">Datos de la empresa</h2>


        <h4>Titulo</h4>
<input type="text" id="defaultContactForm" class="form-control mb-4" placeholder="Nombre de la empresa">
<h4>Direccion</h4>
<input type="text" id="defaultContactForm" class="form-control mb-4" placeholder="Direccion">
<h4>Dias y horarios de atención al público</h4>
<input type="text" id="defaultContactForm" class="form-control mb-4" placeholder="Horario de atención">
<h4>Ubicación Google</h4>
<input type="number" id="defaultContactForm" class="form-control mb-4" placeholder="URL maps">
<h4>Telefono</h4>
<input type="text" id="defaultContactForm" class="form-control mb-4" placeholder="Telefono">
<h4>Correo Público</h4>
<input type="mail" id="defaultContactForm" class="form-control mb-4" placeholder="example@gmail.com">
<h4>Correo de contacto</h4>
<input type="mail" id="defaultContactForm" class="form-control mb-4" placeholder="example@gmail.com">
<h4>Correo de cotizaciones</h4>
<input type="mail" id="defaultContactForm" class="form-control mb-4" placeholder="example@gmail.com">
<h2  class="text-center">Redes Sociales</h2>
<h4>Facebook</h4>
<input type="text" id="defaultContactForm" class="form-control mb-4" placeholder="Facebook.com/user">
<h4>Instagram</h4>
<input type="text" id="defaultContactForm" class="form-control mb-4" placeholder="Instagram.com/user">

<button class="btn btn-info btn-block" type="submit">Actualizar</button>

<script src="https://code.jquery.com/jquery-4.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</form>
@endsection

@section('javascript')

@endsection

