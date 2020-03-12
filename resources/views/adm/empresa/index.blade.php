@extends('layouts.adm')
@section('content')

<br><br><br>
<div class="panel-body container">

<form class=" border border-light p-5" action="{{route('datos-save')}}" method="post">
    @csrf
    <h2  class="text-center">Datos de la empresa</h2>

        <h4>Nombre de la empresa</h4>
<input  value="{{@$empresas->data['titulo']}}"  type="text" id="defaultContactForm" class="form-control mb-4" placeholder="Nombre de la empresa" name='titulo' >
<h4>Direccion</h4>
<input  value="{{@$empresas->data['direccion']}}"  type="text" id="defaultContactForm" class="form-control mb-4" placeholder="Direccion" name='direccion'>
<h4>Dias y horarios de atención al público</h4>
<input  value="{{@$empresas->data['horario']}}" type="text" id="defaultContactForm" class="form-control mb-4" placeholder="Horario de atención" name='horario'>
<h4>Ubicación Google</h4>
<input  value="{{@$empresas->data['ubicacion']}}" type="link" id="defaultContactForm" class="form-control mb-4" placeholder="URL maps" name='ubicacion'>
<h4>Telefono</h4>
<input  value="{{@$empresas->data['telefono']}}" type="text" id="defaultContactForm" class="form-control mb-4" placeholder="Telefono" name='telefono'>
<h4>Correo Público</h4>
<input  value="{{@$empresas->data['email']}}" type="mail" id="defaultContactForm" class="form-control mb-4" placeholder="example@gmail.com" name='email'>
<h4>Correo de contacto</h4>
<input  value="{{@$empresas->data['emailContacto']}}" type="mail" id="defaultContactForm" class="form-control mb-4" placeholder="example@gmail.com" name='emailContacto'>
<h4>Correo de cotizaciones</h4>
<input  value="{{@$empresas->data['emailCotizacion']}}" type="mail" id="defaultContactForm" class="form-control mb-4" placeholder="example@gmail.com" name='emailCotizacion'>
<h2  class="text-center">Redes Sociales</h2>
<h4>Facebook</h4>
<input  value="{{@$empresas->data['facebook']}}" type="text" id="defaultContactForm" class="form-control mb-4" placeholder="Facebook.com/user">
<h4>Instagram</h4>
<input  value="{{@$empresas->data['instagram']}}" type="text" id="defaultContactForm" class="form-control mb-4" placeholder="Instagram.com/user">

<button class="btn btn-info btn-block" type="submit">Guardar Cambios</button>

</form>
</div>
@endsection

@section('javascript')

@endsection

